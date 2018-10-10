<?php

use Illuminate\Database\Seeder;
use App\JobPost;

class JobPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new JobPost([
            'title' => 'Personal assistance needed',
            'description' => 'Assist in setting and maintaining programs. Stock merchandise adequately. Perform other duties as necessary to maximize profitability; customer satisfaction; and teamwork; while protecting company assets'
        ]);

        $post->save();

        $post = new JobPost([
            'title' => 'Charity clerk',
            'description' => 'Function as a Cashier and/or Stocker supporting the Lead Sales Associate. Act as the point of contact for customers. Assist in setting and maintaining plan-o-grams and programs. Stock merchandise adequately. Perform other duties as necessary to maximize profitability; customer satisfaction; and teamwork; while protecting company assets'
        ]);

        $post->save();

        $post = new JobPost([
            'title' => 'Donation Attendant at a Charity home',
            'description' => 'Assists with donations to be sold in the store.  Assists donors to RECEIVE  in donations.  Gives receipts to donors, sorts donations.. High School Diploma or equivalency preferred.  Must be able to work weekends & evenings. Must have great customer service skills.  Must be able to communicate effectively with the public.  standing, walking, bending, pushing, pulling, stooping is required when shopping for supplies'
        ]);

        $post->save();

        $post = new JobPost([
            'title' => 'Donation Center Attendant/ Floater',
            'description' => 'The Donation Center Attendant is responsible for accepting donations from contributors.  Loads, sorts, and stacks materials for items in trailers.    Keeps daily and monthly records of donations and all assigned paperwork to date.  Applicants must have direct deposit, must be able to work weekends and nights and have dependable transportation.  High School graduate or equivalent preferred.  Previous experience in customer relations will be an asset.  Must have great customer service skills, able to lift up to 75 lbs, walking, standing, bending, stooping, and able to work outside in all weather conditions.  Great benefits to full time positions including:  paid holidays and vacation.  No experience necessary. Will provide training'
        ]);

        $post->save();
    }
}
