<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{

    public $world_driving_videos = array(
        'clutch-control' => 'https://youtube.com/embed/fc61Q_Z4GEs',
        'when-to-change-gear' => 'https://youtube.com/embed/2LTyiq7mcUw',
        'which-lane-at-roundabouts' => 'https://youtube.com/embed/TD5v4DhfmbA',
        'parallel-parking-tips' => 'https://youtube.com/embed/t3UbEi4YDFA',
        '45-degree-parking' => 'https://youtube.com/embed/8-TvBcf8GWI',
        'change-down-gear-smoothly' => 'https://youtube.com/embed/pHhdmb1jrFo',
        'pull-push-steering' => 'https://youtube.com/embed/oWV6DIokD1Y',
        'forwards-bay-parking' => 'https://youtube.com/embed/hNs0RdEHcAY',
        'clutch-control-on-hill' => 'https://youtube.com/embed/Kg45l6Zt-ek',
        'meeting-traffic' => 'https://youtube.com/embed/a_6BQc_vpzY',
        'pull-up-on-right-and-reverse' => 'https://youtube.com/embed/mhvta6xeyN0',
        'show-tell-questions' => 'https://youtube.com/embed/obBL7_qCXok'
    );

    public $learn_engineering_videos = array(
        'clutch' => 'https://youtube.com/embed/devo3kdSPQY',
        'steering' => 'https://youtube.com/embed/em1O8mz7sF0',
        'anti-lock-braking' => 'https://youtube.com/embed/98DXe3uKwfc',
        'castor-effect' => 'https://youtube.com/embed/wLbs8kBXgrw',
        'gears' => 'https://youtube.com/embed/wCu9W9xNwtI'
    );

    public $science_garage_videos = array(
        'manual-transmission' => 'https://youtube.com/embed/h50yIRZzPGU',
        'differentials' => 'https://youtube.com/embed/85CA4_cgZ5U',
        'carburetors' => 'https://youtube.com/embed/1ohL6KgasjA',
        'engine-cooling' => 'https://youtube.com/embed/HPVckPH6o-w',
        'intake-and-exhaust' => 'https://youtube.com/embed/Wh3jZcKVmFc',
        'turbos' => 'https://youtube.com/embed/lrCwmpjR77U',
        'superchargers' => 'https://youtube.com/embed/M3whX_peJiY',
        'fuel-injectors' => 'https://youtube.com/embed/VgeucJ8vjAs',
        'catalytic-convertors' => 'https://youtube.com/embed/lJiznlz5buc',
        'torque-vs-horsepower' => 'https://youtube.com/embed/mRROa_plpTc',
        'ignition-systems' => 'https://youtube.com/embed/742Ml4oD3s4',
        'suspension' => 'https://youtube.com/embed/_k0Gjre1QlY',
        'brakes' => 'https://youtube.com/embed/6H7nwlT_qNY',
        'tyres' => 'https://youtube.com/embed/N_YXtc27gig'
    );

    public $road_safety_videos = array(
        'selective-attention-test'  => 'https://youtube.com/embed/Ahg6qcgoay4',
        'dealing-with-cyclists' => 'https://youtube.com/embed/OTGRQgw6PDA',
        'mistakes' => 'https://youtube.com/embed/B2rFTbvwteo',
        'world-road-safety-ads' => 'https://youtube.com/embed/3KcvMLEYF1w',
        'smart-motorways' => 'https://youtube.com/embed/ANmoyaDsr28',
        'truck-blind-spot' => "https://youtube.com/embed/lV-rhiGRFTE"
    );

    public $think_videos = array(
        'blue-light-aware' => 'https://youtube.com/embed/btRHvQEIkcU',
        'emergency-vehicles' => "https://youtube.com/embed/KkKRgmiMpiQ",
        'driving-around-horses' => "https://youtube.com/embed/kPmKm5yqrHw",
        'country-roads' => "https://youtube.com/embed/OxziDtAsbok",
        'life-without-zoe' => "https://youtube.com/embed/vhZiu8FQqus",
        'be-phone-smart' => "https://youtube.com/embed/9a1V06SjfuU",
        'at-30-mph' => "https://youtube.com/embed/kOSvpPZzGpo",
        'a-mate-doesnt-let-a-mate-drink-drive' => "https://youtube.com/embed/oFkOLpYti5Y",
        'drug-driving' => 'https://youtube.com/embed/EWBv092Bnf8',
        'am-i-fit-to-drive' => 'https://youtube.com/embed/Bz0tnwiYv4w',
        'morning-after' => "https://youtube.com/embed/Z_x0NH47nac",
        'if-you-could-see-through-the-landscape' => 'https://youtube.com/embed//B5gwkzsggHI'
    );

    public $advance_driving_videos = array(
        'rush-hour-roundabouts' => 'https://www.youtube.com/embed/-HcYY55jJJU',
        'offset-roundabouts' => 'https://www.youtube.com/embed/r8UGFa3QuVc?si=CdabfZH1XbreQbj_',
        'show-tell-questions' => 'https://www.youtube.com/embed/89q5qJzikwo?si=hb99-HYWQM8xpqG4',
        'forward-bay-parking' => 'https://www.youtube.com/embed/VH6jqwOPK2E?si=GFPMfEdMhCcub7GP',
        'forward-planning' => 'https://www.youtube.com/embed/g0BAEDtznBA?si=Q9AyUJ7p4GWAmGdk',
        'defensive-driving' => 'https://www.youtube.com/embed/7Ids8S7dLvA?si=HUcqJ1_sSZ-MOysZ',
        'hazard-perception' => 'https://www.youtube.com/embed/v6LG3gObGPM?si=aQwreJH6bg6-z1-y',
        'better-downshifting' => 'https://www.youtube.com/embed/BMhcfbu5WG8?si=jaJYsSSxKJy6T_CS',
        'accelerator-sense' => 'https://www.youtube.com/embed/-z8CveLub2M?si=8tBV6Sb2jaR4P_xr',
        'steering-technique' => 'https://www.youtube.com/embed/Oiv6V8f5g18?si=bzoYG6j33Msi1-fD'
    );

    /**
     * get all the videos
     */
    public function index()
    {
        return view('videos.index', $this->get_videos());
    }

    /**
     * get particular video
     */
    public function show($author)
    {
        $author = str_replace('-', '_', $author);

        return view('videos.show')->with(['author' => $author, 'videos' => $this->get_videos()]);
    }

    /**
     * return nested array videos
     */
    public function get_videos()
    {
        $all_videos =  [
            'world_driving' => $this->world_driving_videos,
            'learn_engineering' => $this->learn_engineering_videos,
            'science_garage' => $this->science_garage_videos,
            'road_safety' => $this->road_safety_videos,
            'think' => $this->think_videos,
            'advance_driving' => $this->advance_driving_videos,
        ];

        return $all_videos;
    }
}
