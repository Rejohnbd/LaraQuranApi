<?php

use App\SuraInfo;
use Illuminate\Database\Seeder;

class SuraInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sura Fatiha
        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 1,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "بسم الله الرحمن الرحيم",
            'english'       => 'In the name of Allah, the Entirely Merciful, the Especially Merciful.',
            'bangla'        => "আল্লাহর নাম নিয়ে (আরম্ভ করছি), (যিনি) রহমান (--পরম করুণাময়, যিনি অসীম করুণা ও দয়া বশতঃ বিশ্বজগতের সমস্ত সৃষ্টির সহাবস্থানের প্রয়োজনীয় সব ব্যবস্থা অগ্রিম করে রেখেছেন), (যিনি) রহীম (--অফুরন্ত ফলদাতা, যাঁর অপার করুণা ও দয়ার ফলে প্রত্যেকের ক্ষুদ্রতম শুভ-প্রচেষ্টাও বিপুলভাবে সাফল্যমণ্ডিত ও পুরস্কৃত হয়ে থাকে)।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 2,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "الحمد لله رب العالمين",
            'english'       => "[All] praise is [due] to Allah, Lord of the worlds -",
            'bangla'        => "সমস্ত প্রশংসা আল্লাহ্‌র প্রাপ্য, সমুদয় সৃষ্ট-জগতের রব্ব।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 3,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "الرحمن الرحيم",
            'english'       => "The Entirely Merciful, the Especially Merciful,",
            'bangla'        => "রহমান, রহীম।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 4,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "مالك يوم الدين",
            'english'       => "Sovereign of the Day of Recompense.",
            'bangla'        => "বিচারকালের মালিক।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 5,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "إياك نعبد وإياك نستعين",
            'english'       => "It is You we worship and You we ask for help.",
            'bangla'        => "“তোমারই আমরা এবাদত করি, এবং তোমারই কাছে আমরা সাহায্য প্রার্থনা করি।”",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 6,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "اهدنا الصراط المستقيم",
            'english'       => "Guide us to the straight path -",
            'bangla'        => "“আমাদের তুমি সহজ-সঠিক পথে পরিচালিত করো, --”",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 7,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "صراط الذين أنعمت عليهم غير المغضوب عليهم ولا الضالين",
            'english'       => "The path of those upon whom You have bestowed favor, not of those who have evoked [Your] anger or of those who are astray.",
            'bangla'        => "“তাদের পথে যাদের প্রতি তুমি নিয়ামত অর্পণ করেছ, তাদের ব্যতীত যাদের প্রতি গযব এসেছে, এবং তাদেরও নয় যারা পথভ্রষ্ট।”",
        ]);
    }
}
