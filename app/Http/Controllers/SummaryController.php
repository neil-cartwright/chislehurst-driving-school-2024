<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

use App\Models\Lesson;


class SummaryController extends Controller
{

    public function index($year)
    {
        return view('admin.summaries.index')->with('year', $year);
    }

    public function summary(Request $request, $year)
    {
        $year = $request->input('year', $year);
        $today = Carbon::today();

        // Group lessons by date
        $lessonsByDate = Lesson::whereYear('created_at', $year)
            ->get()
            ->groupBy(fn($l) => Carbon::parse($l->lesson_date)->toDateString());

        $totalWeeks = Carbon::create($year, 12, 28)->isoWeeksInYear();
        $weeks = [];

        // Counters
        $totalShortDays     = 0;
        $totalNormalWeeks   = 0;
        $totalOvertimeWeeks = 0;
        $totalShortWeeks    = 0;
        $totalWeeksOff      = 0;
        $totalDaysWorked    = 0;

        for ($week = 1; $week <= $totalWeeks; $week++) {

            $weekStart = Carbon::now()->setISODate($year, $week)->startOfWeek(Carbon::MONDAY);
            $weekEnd   = Carbon::now()->setISODate($year, $week)->endOfWeek(Carbon::SUNDAY);

            if ($weekStart->greaterThan($today)) {
                break;
            }

            $period = CarbonPeriod::create($weekStart, $weekEnd);

            $days = [];
            $daysWith = 0;
            $daysWithout = 0;

            $weeklyChargeTotal = 0;
            $weeklyLessonCount = 0;

            foreach ($period as $day) {

                if ($day->greaterThan($today)) break;

                $date = $day->toDateString();
                $dayName = $day->format('l');
                $records = $lessonsByDate->get($date, collect());

                $hasRecords = $records->isNotEmpty();

                // Daily total (charge - discount)
                $dailyTotal = 0;

                if ($hasRecords) {

                    $daysWith++;
                    $totalDaysWorked++;

                    // Count lessons
                    $dailyLessonCount = $records->count();
                    $weeklyLessonCount += $dailyLessonCount;

                    // NEW DAILY TOTAL CALCULATION:
                    $dailyTotal = $records->sum(function ($r) {
                        return ($r->lesson_charge ?? 0) - ($r->discountGiven ?? 0);
                    });

                    // Add daily to weekly total
                    $weeklyChargeTotal += $dailyTotal;
                } else {
                    $daysWithout++;
                }

                $days[] = [
                    'date'        => $date,
                    'day_name'    => $dayName,
                    'records'     => $records->values(),
                    'daily_total' => $dailyTotal,   // NEW FIELD
                ];
            }

            // Determine week type
            if ($daysWith == 5) {
                $status = 'normal_week';
                $daysOff = [];
                $totalNormalWeeks++;
            } elseif ($daysWith > 5) {
                $status = 'overtime_week';
                $daysOff = [];
                $totalOvertimeWeeks++;
            } else {
                $status = 'short_week';
                $short = 5 - $daysWith;
                $daysOff = ['days_short' => $short];
                $totalShortWeeks++;
                $totalShortDays += $short;
            }

            // Detect full week off (7 days with no lessons)
            if ($daysWith === 0 && $daysWithout === 7) {
                $totalWeeksOff++;
            }

            $weeks[] = [
                'week_number'          => $week,
                'start_date'           => $weekStart->toDateString(),
                'end_date'             => $weekEnd->toDateString(),
                'days_with_lessons'    => $daysWith,
                'days_without_lessons' => $daysWithout,

                'total_lessons'        => $weeklyLessonCount,  // already added earlier
                'total_lesson_charge'  => $weeklyChargeTotal,   // now includes discounts

                'status'               => $status,
                'days_off'             => $daysOff,
                'week_off'             => ($daysWith === 0),

                'days'                 => $days, // now includes daily totals
            ];
        }

        return response()->json([
            'year'                  => $year,

            'total_days_worked'     => $totalDaysWorked,
            'total_short_days'      => $totalShortDays,
            'total_normal_weeks'    => $totalNormalWeeks,
            'total_overtime_weeks'  => $totalOvertimeWeeks,
            'total_short_weeks'     => $totalShortWeeks,
            'total_weeks_off'       => $totalWeeksOff,

            'weeks' => $weeks,
        ]);
    }
}

/**
 * Chat GPT
 * 
 * Using laravel, create a controller method which for any given year returns records from table 'lessons'. I would like the results grouped by week, with day names included. For any given week I would like to know how many days without lesson there were in that week. If a week has 5 days with records we call that a 'normal week'. If a week has more than 5 days with records we call that an 'overtime week'. If a week has less than 5 records we count how many days fewer than 5 and store that number in an array called ' days off' and call that week a 'short week' Please count the total number of days short across the year and return the result.
 */
