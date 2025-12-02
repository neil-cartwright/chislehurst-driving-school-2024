<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

use App\Models\Lesson;


class TimeOffController extends Controller
{
    public function weeklySummary(Request $request, $year)
    {
        $year = $request->input('year', $year);
        $today = Carbon::today();

        // Group lessons by date
        $lessonsByDate = Lesson::whereYear('created_at', $year)
            ->get()
            ->groupBy(fn($l) => Carbon::parse($l->created_at)->toDateString());

        $totalWeeks = Carbon::create($year, 12, 28)->isoWeeksInYear();
        $weeks = [];
        $totalShortDays = 0;

        for ($week = 1; $week <= $totalWeeks; $week++) {

            $weekStart = Carbon::now()->setISODate($year, $week)->startOfWeek(Carbon::MONDAY);
            $weekEnd   = Carbon::now()->setISODate($year, $week)->endOfWeek(Carbon::SUNDAY);

            // Stop when reaching future weeks
            if ($weekStart->greaterThan($today)) {
                break;
            }

            $period = CarbonPeriod::create($weekStart, $weekEnd);

            $days = [];
            $daysWith = 0;
            $daysWithout = 0;

            foreach ($period as $day) {

                if ($day->greaterThan($today)) {
                    break;
                }

                $date = $day->toDateString();
                $dayName = $day->format('l');

                $records = $lessonsByDate->get($date, collect());
                $hasRecords = $records->isNotEmpty();

                if ($hasRecords) {
                    $daysWith++;
                } else {
                    $daysWithout++;
                }

                $days[] = [
                    'date'     => $date,
                    'day_name' => $dayName,
                    'records'  => $records->values(),
                ];
            }

            // Determine week classification
            if ($daysWith == 5) {
                $status = 'normal_week';
                $daysOff = [];
            } elseif ($daysWith > 5) {
                $status = 'overtime_week';
                $daysOff = [];
            } else {
                $status = 'short_week';
                $short = 5 - $daysWith;
                $daysOff = ['days_short' => $short];
                $totalShortDays += $short; // accumulate yearly short days
            }

            $weeks[] = [
                'week_number'         => $week,
                'start_date'          => $weekStart->toDateString(),
                'end_date'            => $weekEnd->toDateString(),
                'days_with_lessons'   => $daysWith,
                'days_without_lessons' => $daysWithout,
                'status'              => $status,
                'days_off'            => $daysOff,
                'days'                => $days,
            ];
        }

        return response()->json([
            'year' => $year,
            'total_short_days' => $totalShortDays,
            'weeks' => $weeks,
        ]);
    }
}

/**
 * Chat GPT
 * 
 * Using laravel, create a controller method which for any given year returns records from table 'lessons'. I would like the results grouped by week, with day names included. For any given week I would like to know how many days without lesson there were in that week. If a week has 5 days with records we call that a 'normal week'. If a week has more than 5 days with records we call that an 'overtime week'. If a week has less than 5 records we count how many days fewer than 5 and store that number in an array called ' days off' and call that week a 'short week' Please count the total number of days short across the year and return the result.
 */
