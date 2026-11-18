<?php

namespace App\Http\Controllers;

class AreaController extends Controller
{

    public function show(String $area)
    {
        $areas = array(
            'bromley' => 'Enjoyable driving lessons in Bromley with an experienced professional driving instructor. Contact Neil on 07917 042 740 to get started.',

            'bickley' => 'Experienced and reliable professional driving instructor in Bickley. Supportive and enjoyable driver training. Contact Neil on 07917 042 740 to get on the road.',

            'petts-wood' => 'Enjoyable professional driving lessons in Petts wood. Supportive and experienced fully qualified driving instructor. Contact Neil on 07917 042 740.',

            'chislehurst' => 'Enjoyable driver training in Chislehurst with an experienced, professional and reliable local driving instructor. Contact Neil on 07917 042 740 to book a first lesson.',

            'kidbrooke' => 'Reliable and enjoyable professional driving lessons in Kidbrooke with a supportive and experienced local driving instructor. Get in touch with Neil to get started this week.',

            'eltham' => 'Enjoyable driving lessons in Eltham with an experienced professional driving instructor. Reliable driver training. Call Neil on 07917 042 740 and get started this week.',

            'mottingham' => 'Enjoyable professional driving lessons in Mottingham with a reliable and experienced driving instructor. Contact Neil on 07917 042 740 to book a lesson.',

            'new-eltham' => 'Driving lessons in New Eltham with a reliable professional driving instructor. Contact Neil on 07917 042 740 to get started this week.',

            'grove-park' => 'Reliable driver training in Grove Park with an experienced professional driving instructor. Get started today. Contact Neil on 07917 042 740.',

            'lee' => 'Experienced reliable professional driving instructor in Lee Green providing enjoyable and focused driving lessons and driving test preparation. Contact Neil and get started this week.',

            'sidcup' => 'Experienced and reliable driver training and driving test preparation in Sidcup. Get in touch with Neil on 07917 042 740 and get going today.',

            'downham' => 'Reliable and professional driver training in Downham with a supportive, friendly and experienced driving instructor.',

            'woolwich' => 'Driving lessons in Shooters Hill and Woolwich available Monday to Saturday. Friendly, reliable and experienced local instructor. Contact Neil and get started this week.',

            'orpington' => 'Enjoyable driving lessons in Orpington. Reliable and supportive driver training and driving test preparation. Contact Neil and get started today.',

            'charlton' => 'Enjoyable driving lessons in Charlton with a reliable, punctual and experienced local driving instructor. Contact Neil and get started this week.',

            'lewisham' => 'Driver training in Lewisham. Calm and friendly driving lessons with a reliable, punctual and professional local driving instructor.',

            'hayes' => 'Driving lessons in Hayes, Kent, with a friendly local driving instructor. Contact Neil on 07917 042 740 to book a lesson today.'
        );

        $area_names = array_keys($areas);
        $area_description = $areas[$area];

        if (in_array($area, $area_names)) {
            return view('areas.index')->with(['area' => $area, 'area_description' => $area_description]);
        } else {
            return redirect()->route('index');
        }
    }
}
