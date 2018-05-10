<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShabadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shabads.list');
    }

    public function create(Request $request)
    {
        if ($request->has('shabad_id')) {
            $shabadId = $request->shabad_id;
            $data = file_get_contents("https://api.gurbaninow.com/v2/shabad/$shabadId");
            $data = json_decode($data, true);

            $akhars = [];
            $lineCount = 0;
            $index = 0;

            foreach ($data['shabad'] as $line) {
                $akharLine = $line['line']['gurmukhi']['akhar'];
                if ($this->isHeader($akharLine)) {
                    continue;
                }

                $akharLine = str_replace(' rhwau ]', '', $akharLine);

                for ($i = 0; $i < strlen($akharLine); $i++) {
                    //skip spaces
                    if (in_array($akharLine[$i], [' ', ']', 
                                '1',
                                '2',
                                '3',
                                '4',
                                '5',
                                '6',
                                '7',
                                '8',
                                '9',
                                '0'
                        ])) {
                        $index++;
                        continue;
                    }
                    if (!isset($akhars[$lineCount][$index])) {
                        $akhars[$lineCount][$index] = '';
                    }
                    $akhars[$lineCount][$index] .= $akharLine{$i};

                    if (!isset($akharLine[$i + 1])) {
                        continue;
                    }

                    if (!in_array(
                            $akharLine[$i + 1],
                            [
                                'w',
                                'M',
                                'u',
                                ']',
                                ' ',
                                'Y',
                                'y',
                                'I',
                                'o'
                            ]
                    )
                    ) {
                        $index++;
                    }

                    if ($i > 0 && in_array($akharLine[$i], ['i'])) {
                        $index--;
                    }
                }

                if (strpos($line['line']['gurmukhi']['akhar'], ']1') > 0 ||
                    strpos($line['line']['gurmukhi']['akhar'], ']2') > 0 ||
                    strpos($line['line']['gurmukhi']['akhar'], ']3') > 0 ||
                    strpos($line['line']['gurmukhi']['akhar'], ']4') > 0 ||
                    strpos($line['line']['gurmukhi']['akhar'], ']5') > 0 ||
                    strpos($line['line']['gurmukhi']['akhar'], ']6') > 0 ||
                    strpos($line['line']['gurmukhi']['akhar'], ']7') > 0 ||
                    strpos($line['line']['gurmukhi']['akhar'], ']8') > 0 ||
                    strpos($line['line']['gurmukhi']['akhar'], ']9') > 0
                ) {
                    $lineCount++;
                    $index = 0;
                }
            }

            $surs = [
                's',
                'r',
                'g',
                'm',
                'p',
                'D',
                'n',
                'sw'
            ];
// dd($akhars);
            return view ('shabads.shabad-form', ['akhars' => $akhars, 'surs' => $surs]);
        }

        return view('shabads.search-form');
    }

    public function store(Request $request)
    {
        
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $data = file_get_contents("https://api.gurbaninow.com/v2/search/{$query}/?searchtype=0");
        $data = json_decode($data, true);

        return view('shabads.search-form', ['shabads' => $data['shabads']]);
    }

    private function isHeader($line)
    {
        if ($line === 'Awsw ]') {
            return true;
        }

        return false;
    }
}
