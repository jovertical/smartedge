<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $esat = Subject::create([
            'name' => 'Electronic Systems and Technology (ESAT)',
        ]);
        
        $esatQuestion1 = $esat->questions()->create([
            'body' =>  'What is the diameter of an atom?',
        ]);

        $esatQuestion1->answers()->create([
            'body' => 'About 10^-10 m',
            'correct' => true,
        ]);
        $esatQuestion1->answers()->create(['body' => 'About 10^-10 cm']);
        $esatQuestion1->answers()->create(['body' => 'About 10^-10 mm']);
        $esatQuestion1->answers()->create(['body' => 'About 10^-10 µm']);

        $esatQuestion2 = $esat->questions()->create([
            'body' =>  'The magnitude of the induced emf in a coil is directly proportional to the rate of change of flux linkages. This is known as',
        ]);

        $esatQuestion2->answers()->create(['body' => 'Joule’s Law']);
        $esatQuestion2->answers()->create([
            'body' => 'Faraday’s second law of electromagnetic induction',
            'correct' => true,
        ]);
        $esatQuestion2->answers()->create(['body' => 'Faraday’s first law of electromagnetic induction']);
        $esatQuestion2->answers()->create(['body' => 'Coulomb’s Law']);

        $esatQuestion3 = $esat->questions()->create([
            'body' =>  'The force of attraction or repulsion between two magnetic poles is inversely proportional to the square of the distance between them. This is known as',
        ]);

        $esatQuestion3->answers()->create(['body' => 'Newton’s first law']);
        $esatQuestion3->answers()->create(['body' => 'Faraday’s first law of electromagnetic induction']);
        $esatQuestion3->answers()->create(['body' => 'Coulomb’s first law']);
        $esatQuestion3->answers()->create([
            'body' => 'Coulomb’s second law',
            'correct' => true,
        ]);
        
        $esatQuestion4 = $esat->questions()->create([
            'body' =>  'The net electrical charge in an isolated system remains constant. This is known as',
        ]);

        $esatQuestion4->answers()->create([
            'body' => 'Law of conservation of charge',
            'correct' => true,
        ]);
        $esatQuestion4->answers()->create(['body' => 'Coulomb’s first law']);
        $esatQuestion4->answers()->create(['body' => 'Coulomb’s second law']);
        $esatQuestion4->answers()->create(['body' => 'Law of conservation of energy']);

        $esatQuestion5 = $esat->questions()->create([
            'body' => 'The point in a magnet where the intensity of magnetic lines of force is maximum',
        ]);

        $esatQuestion5->answers()->create([
            'body' => 'Magnetic pole',
            'correct' => true,
        ]);
        $esatQuestion5->answers()->create(['body' => 'South pole']);
        $esatQuestion5->answers()->create(['body' => 'North pole']);
        $esatQuestion5->answers()->create(['body' => 'Unit pole']);

        $esatQuestion6 = $esat->questions()->create([
            'body' => 'The emf induced in a coil due to the change of its own flux linked with it is called',
        ]);

        $esatQuestion6->answers()->create(['body' => 'Mutually induced emf']);
        $esatQuestion6->answers()->create(['body' => 'Dynamically induced emf']);
        $esatQuestion6->answers()->create(['body' => 'Statically induced emf']);
        $esatQuestion6->answers()->create([
            'body' => 'Self induced emf',
            'correct' => true,
        ]);

        $esatQuestion7 = $esat->questions()->create([
            'body' => 'If the solenoid is gripped by the right hand with the fingers pointing the direction of current flow, the outstretched thumb will then point the north pole. This is known as',
        ]);

        $esatQuestion7->answers()->create(['body' => 'Right hand rule']);
        $esatQuestion7->answers()->create([
            'body' => 'Helix rule',
            'correct' => true,
        ]);
        $esatQuestion7->answers()->create(['body' => 'End rule']);
        $esatQuestion7->answers()->create(['body' => 'Cork screw rule']);

        $esatQuestion8 = $esat->questions()->create([
            'body' => 'The phenomenon by which a subtracts pieces of iron',
        ]);

        $esatQuestion8->answers()->create([
            'body' => 'Magnetism',
            'correct' => true,
        ]);
        $esatQuestion8->answers()->create(['body' => 'Electromagnetism']);
        $esatQuestion8->answers()->create(['body' => 'Naturalism']);
        $esatQuestion8->answers()->create(['body' => 'Materialism']);

        $esatQuestion9 = $esat->questions()->create([
            'body' => 'A law that states that the current in a thermionic diode varies directly with the three-halves power of anode voltage and inversely with the square of the distance between the electrodes, provided operating conditions are such that the current is limited only by the space charge',
        ]);

        $esatQuestion9->answers()->create(['body' => 'Hall’s law']);
        $esatQuestion9->answers()->create(['body' => 'Joule’s law']);
        $esatQuestion9->answers()->create([
            'body' => 'Child’s law',
            'correct' => true,
        ]);
        $esatQuestion9->answers()->create(['body' => 'Coulomb’s law']);

        $esatQuestion10 = $esat->questions()->create([
            'body' => 'Who developed the electromagnetic theory of light in 1862?',
        ]);

        $esatQuestion10->answers()->create(['body' => 'Heinrich Rudolf Hertz']);
        $esatQuestion10->answers()->create(['body' => 'Wilhelm Rontgen']);
        $esatQuestion10->answers()->create([
            'body' => 'James Clerk Maxwell',
            'correct' => true,
        ]);
        $esatQuestion10->answers()->create(['body' => 'Andre Ampere']);

        $geas = Subject::create([
            'name' => 'General Education and Applied Sciences (GEAS)',
        ]);

        $geasQuestion1 = $geas->questions()->create([
            'body' => 'Management is:',
        ]);

        $geasQuestion1->answers()->create([
            'body' => 'An art',
            'correct' => true,
        ]);
        $geasQuestion1->answers()->create(['body' => 'Both science and art']);
        $geasQuestion1->answers()->create(['body' => 'A science']);
        $geasQuestion1->answers()->create(['body' => 'Neither art nor science']);

        $geasQuestion2 = $geas->questions()->create(['body' => 'Engineering is:']);

        $geasQuestion2->answers()->create(['body' => 'An art']);
        $geasQuestion2->answers()->create(['body' => 'Both science and art']);
        $geasQuestion2->answers()->create([
            'body' => 'A science',
            'correct' => true,
        ]);
        $geasQuestion2->answers()->create(['body' => 'Neither art nor science']);

        $geasQuestion3 = $geas->questions()->create([
            'body' => 'Engineers can become good managers only through __________.',
        ]);

        $geasQuestion3->answers()->create(['body' => 'Experience']);
        $geasQuestion3->answers()->create(['body' => 'Taking master degree in management']);
        $geasQuestion3->answers()->create([
            'body' => 'Effective career planning',
            'correct' => true,
        ]);
        $geasQuestion3->answers()->create(['body' => 'Trainings']);

        $geasQuestion4 = $geas->questions()->create([
            'body' => 'If you are an engineer wanting to become a manager, what will you do?',
        ]);

        $geasQuestion4->answers()->create(['body' => 'Develop new talents']);
        $geasQuestion4->answers()->create(['body' => 'Acquire new values']);
        $geasQuestion4->answers()->create(['body' => 'Broaden your point of view']);
        $geasQuestion4->answers()->create([
            'body' => 'All of the above',
            'correct' => true,
        ]);

        $geasQuestion5 = $geas->questions()->create([
            'body' => 'When engineer enters management, what is the most likely problem he finds difficult to acquire?',
        ]);

        $geasQuestion5->answers()->create(['body' => 'Learning to trust others']);
        $geasQuestion5->answers()->create(['body' => 'Learning how to work through others']);
        $geasQuestion5->answers()->create(['body' => 'Learning how to take satisfaction in the work of others']);
        $geasQuestion5->answers()->create([
            'body' => 'All of the above',
            'correct' => true,
        ]);

        $geasQuestion6 = $geas->questions()->create([
            'body' => 'What management functions refers to the process of anticipating problems, analyzing them, estimating their likely impact and determining actions that will lead to the desired outcomes and goals?',
        ]);

        $geasQuestion6->answers()->create([
            'body' => 'Planning',
            'correct' => true,
        ]);
        $geasQuestion6->answers()->create(['body' => 'Leading']);
        $geasQuestion6->answers()->create(['body' => 'Controlling']);
        $geasQuestion6->answers()->create(['body' => 'Organizing']);

        $geasQuestion7 = $geas->questions()->create([
            'body' => 'What refers to the establishing interrelationships between people and things in such a way that human and materials resources are effectively focused toward achieving the goal of the company?',
        ]);

        $geasQuestion7->answers()->create(['body' => 'Planning']);
        $geasQuestion7->answers()->create(['body' => 'Leading']);
        $geasQuestion7->answers()->create(['body' => 'Controlling']);
        $geasQuestion7->answers()->create([
            'body' => 'Organizing',
            'correct' => true,
        ]);
        
        $geasQuestion8 = $geas->questions()->create([
            'body' => 'What management function involves selecting candidates and training personnel?',
        ]);

        $geasQuestion8->answers()->create(['body' => 'Organizing']);
        $geasQuestion8->answers()->create([
            'body' => 'Staffing',
            'correct' => true,
        ]);
        $geasQuestion8->answers()->create(['body' => 'Motivating']);
        $geasQuestion8->answers()->create(['body' => 'Controlling']);

        $geasQuestion9 = $geas->questions()->create([
            'body' => 'What management function involves orienting personnel in the most effective way and channeling resources?',
        ]);

        $geasQuestion9->answers()->create([
            'body' => 'Directing',
            'correct' => true,
        ]);
        $geasQuestion9->answers()->create(['body' => 'Planning']);
        $geasQuestion9->answers()->create(['body' => 'Organizing']);
        $geasQuestion9->answers()->create(['body' => 'Leading']);

        $geasQuestion10 = $geas->questions()->create([
            'body' => 'Actual performance normally is the same as the original plan and therefore it is necessary to check for deviation and to take corrective action. This action refers to what management function?',
        ]);

        $geasQuestion10->answers()->create(['body' => 'Organizing']);
        $geasQuestion10->answers()->create(['body' => 'Planning']);
        $geasQuestion10->answers()->create([
            'body' => 'Controlling',
            'correct' => true,
        ]);
        $geasQuestion10->answers()->create(['body' => 'Staffing']);

        $electronics = Subject::create([
            'name' => 'Electronics',
        ]);

        $electronicsQuestion1 = $electronics->questions()->create([
            'body' => 'A _________ is a group of cells that generates electric energy from their internal chemical reaction',
        ]);

        $electronicsQuestion1->answers()->create([
            'body' => 'battery',
            'correct' => true,
        ]);
        $electronicsQuestion1->answers()->create(['body' => 'regulator']);
        $electronicsQuestion1->answers()->create(['body' => 'power supply']);
        $electronicsQuestion1->answers()->create(['body' => 'solar energy']);

        $electronicsQuestion2 = $electronics->questions()->create([
            'body' => 'Which of the following is the main function of a battery?',
        ]);

        $electronicsQuestion2->answers()->create([
            'body' => 'To provide a source of steady DC voltage to fixed polarity',
            'correct' => true,
        ]);
        $electronicsQuestion2->answers()->create(['body' => 'To provide a source of steady dc voltage of variable polarity']);
        $electronicsQuestion2->answers()->create(['body' => 'To provide a source of variable dc voltage of fixed polarity']);
        $electronicsQuestion2->answers()->create(['body' => 'To provide a source of variable dc voltage of variable polarity']);

        $electronicsQuestion3 = $electronics->questions()->create([
            'body' => 'Volt is a unit of ____________.',
        ]);

        $electronicsQuestion3->answers()->create([
            'body' => 'electromotive force',
            'correct' => true,
        ]);
        $electronicsQuestion3->answers()->create(['body' => 'energy']);
        $electronicsQuestion3->answers()->create(['body' => 'force']);
        $electronicsQuestion3->answers()->create(['body' => 'magneto motive force']);

        $electronicsQuestion4 = $electronics->questions()->create([
            'body' => 'A transformer will work on',
        ]);

        $electronicsQuestion4->answers()->create([
            'body' => 'ac only',
            'correct' => true,
        ]);
        $electronicsQuestion4->answers()->create(['body' => 'ac as well as dc']);
        $electronicsQuestion4->answers()->create(['body' => 'dc only']);
        $electronicsQuestion4->answers()->create(['body' => 'pulsating dc']);

        $electronicsQuestion5 = $electronics->questions()->create([
            'body' => 'In a chemical cell current is the movement of',
        ]);

        $electronicsQuestion5->answers()->create([
            'body' => 'positive and negative ions',
            'correct' => true,
        ]);
        $electronicsQuestion5->answers()->create(['body' => 'positive charges']);
        $electronicsQuestion5->answers()->create(['body' => 'positive ions only']);
        $electronicsQuestion5->answers()->create(['body' => 'negative ions only']);

        $electronicsQuestion6 = $electronics->questions()->create([
            'body' => 'What is the nominal output of an automotive battery having six lead acid cells in series?',
        ]);

        $electronicsQuestion6->answers()->create([
            'body' => '12 V',
            'correct' => true,
        ]);
        $electronicsQuestion6->answers()->create(['body' => '24 V']);
        $electronicsQuestion6->answers()->create(['body' => '6 V']);
        $electronicsQuestion6->answers()->create(['body' => '3 V']);

        $electronicsQuestion7 = $electronics->questions()->create([
            'body' => 'The speed of a dc motor is',
        ]);

        $electronicsQuestion7->answers()->create(['body' => 'directly proportional to flux per pole']);
        $electronicsQuestion7->answers()->create([
            'body' => 'inversely proportional to flux per pole',
            'correct' => true,
        ]);
        $electronicsQuestion7->answers()->create(['body' => 'inversely proportional to applied voltage']);
        $electronicsQuestion7->answers()->create(['body' => 'inversely proportional to armature current']);

        $electronicsQuestion8 = $electronics->questions()->create([
            'body' => 'Low speed alternators are driven by',
        ]);

        $electronicsQuestion8->answers()->create([
            'body' => 'hydraulic turbines',
            'correct' => true,
        ]);
        $electronicsQuestion8->answers()->create(['body' => 'steam turbines']);
        $electronicsQuestion8->answers()->create(['body' => 'steam engines']);
        $electronicsQuestion8->answers()->create(['body' => 'diesel engines']);

        $electronicsQuestion9 = $electronics->questions()->create([
            'body' => 'High speed alternators are driven by',
        ]);

        $electronicsQuestion9->answers()->create(['body' => 'diesel engine']);
        $electronicsQuestion9->answers()->create([
            'body' => 'steam turbines',
            'correct' => true,
        ]);
        $electronicsQuestion9->answers()->create(['body' => 'hydraulic turbines']);
        $electronicsQuestion9->answers()->create(['body' => 'diesel engine']);

        $electronicsQuestion10 = $electronics->questions()->create([
            'body' => 'The common 9v flat battery for transistor radio has _____________ cells connected in series',
        ]);

        $electronicsQuestion10->answers()->create(['body' => '12']);
        $electronicsQuestion10->answers()->create(['body' => '3']);
        $electronicsQuestion10->answers()->create([
            'body' => '6',
            'correct' => true,
        ]);
        $electronicsQuestion10->answers()->create(['body' => '9']);

        $math = Subject::create([
            'name' => 'Mathematics',
        ]);

        $mathQuestion1 = $math->questions()->create([
            'body' => 'Evaluate the lim (x^2 – 16)/(x – 4).',
        ]);

        $mathQuestion1->answers()->create(['body' => '1']);
        $mathQuestion1->answers()->create([
            'body' => '8',
            'correct' => true,
        ]);
        $mathQuestion1->answers()->create(['body' => '0']);
        $mathQuestion1->answers()->create(['body' => '16']);

        $mathQuestion2 = $math->questions()->create([
            'body' => 'Evaluate the limit (x – 4)/(x^2 – x – 12) as x approaches 4.',
        ]);

        $mathQuestion2->answers()->create(['body' => 'undefined']);
        $mathQuestion2->answers()->create(['body' => '0']);
        $mathQuestion2->answers()->create(['body' => 'infinity']);
        $mathQuestion2->answers()->create([
            'body' => '1/7',
            'correct' => true,
        ]);

        $mathQuestion3 = $math->questions()->create([
            'body' => 'What is the limit of cos (1/y) as y approaches infinity?',
        ]);

        $mathQuestion3->answers()->create(['body' => '0']);
        $mathQuestion3->answers()->create(['body' => '-1']);
        $mathQuestion3->answers()->create(['body' => 'infinity']);
        $mathQuestion3->answers()->create([
            'body' => '1',
            'correct' => true,
        ]);

        $mathQuestion4 = $math->questions()->create([
            'body' => 'Evaluate the limits of lim (x^3 – 2x + 9) /(2x^3 – 8).',
        ]);

        $mathQuestion4->answers()->create(['body' => '0']);
        $mathQuestion4->answers()->create(['body' => '-9/8']);
        $mathQuestion4->answers()->create(['body' => 'α']);
        $mathQuestion4->answers()->create([
            'body' => '½',
            'correct' => true,
        ]);

        $mathQuestion5 = $math->questions()->create([
            'body' => 'Evaluate the limit of (x^3 – 2x^2 – x + 2) /(x^2-4) as x approaches 2.',
        ]);

        $mathQuestion5->answers()->create(['body' => 'α']);
        $mathQuestion5->answers()->create([
            'body' => '¾',
            'correct' => true,
        ]);
        $mathQuestion5->answers()->create(['body' => '2/5']);
        $mathQuestion5->answers()->create(['body' => '4/7']);

        $mathQuestion6 = $math->questions()->create([
            'body' => 'Evaluate the limit of √(x – 4)/√(x^2 – 16) as x approaches 4.',
        ]);

        $mathQuestion6->answers()->create(['body' => '0.262']);
        $mathQuestion6->answers()->create([
            'body' => '0.354',
            'correct' => true,
        ]);
        $mathQuestion6->answers()->create(['body' => '0']);
        $mathQuestion6->answers()->create(['body' => 'α']);

        $mathQuestion7 = $math->questions()->create([
            'body' => 'Evaluate the limit of (x^2 – x – 6)/(x^2 – 4x + 3) as x approaches 3.',
        ]);

        $mathQuestion7->answers()->create(['body' => '3/2']);
        $mathQuestion7->answers()->create(['body' => '3/5']);
        $mathQuestion7->answers()->create(['body' => '0']);
        $mathQuestion7->answers()->create([
            'body' => '5/2',
            'correct' => true,
        ]);

        $mathQuestion8 = $math->questions()->create([
            'body' => 'Evaluate the limit of (4x^2 – x)/ (2x^2 + 4) as x approaches α.',
        ]);

        $mathQuestion8->answers()->create([
            'body' => '2',
            'correct' => true,
        ]);
        $mathQuestion8->answers()->create(['body' => '4']);
        $mathQuestion8->answers()->create(['body' => 'α']);
        $mathQuestion8->answers()->create(['body' => '0']);

        $mathQuestion9 = $math->questions()->create([
            'body' => 'Evaluate the limit of (x – 2)/(x^3 – 8) as x approaches 2.',
        ]);

        $mathQuestion9->answers()->create(['body' => 'α']);
        $mathQuestion9->answers()->create([
            'body' => '1/12',
            'correct' => true,
        ]);
        $mathQuestion9->answers()->create(['body' => '0']);
        $mathQuestion9->answers()->create(['body' => '2/3']);

        $mathQuestion10 = $math->questions()->create([
            'body' => 'Evaluate the limit of θ/(2 sinθ) as θ approaches 0.',
        ]);

        $mathQuestion10->answers()->create(['body' => '2']);
        $mathQuestion10->answers()->create([
            'body' => '½',
            'correct' => true,
        ]);
        $mathQuestion10->answers()->create(['body' => '0']);
        $mathQuestion10->answers()->create(['body' => 'a']);
    }
}
