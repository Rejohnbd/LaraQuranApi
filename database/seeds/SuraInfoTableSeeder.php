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
            'arabic'        => "بِسْمِ اللَّهِ الرَّحْمَـٰنِ الرَّحِيمِ",
            'english'       => 'In the name of Allah, the Entirely Merciful, the Especially Merciful.',
            'bangla'        => "আল্লাহর নাম নিয়ে (আরম্ভ করছি), (যিনি) রহমান (--পরম করুণাময়, যিনি অসীম করুণা ও দয়া বশতঃ বিশ্বজগতের সমস্ত সৃষ্টির সহাবস্থানের প্রয়োজনীয় সব ব্যবস্থা অগ্রিম করে রেখেছেন), (যিনি) রহীম (--অফুরন্ত ফলদাতা, যাঁর অপার করুণা ও দয়ার ফলে প্রত্যেকের ক্ষুদ্রতম শুভ-প্রচেষ্টাও বিপুলভাবে সাফল্যমণ্ডিত ও পুরস্কৃত হয়ে থাকে)।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 2,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ",
            'english'       => "[All] praise is [due] to Allah, Lord of the worlds -",
            'bangla'        => "সমস্ত প্রশংসা আল্লাহ্‌র প্রাপ্য, সমুদয় সৃষ্ট-জগতের রব্ব।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 3,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "الرَّحْمَـٰنِ الرَّحِيمِ",
            'english'       => "The Entirely Merciful, the Especially Merciful,",
            'bangla'        => "রহমান, রহীম।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 4,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "مَالِكِ يَوْمِ الدِّينِ",
            'english'       => "Sovereign of the Day of Recompense.",
            'bangla'        => "বিচারকালের মালিক।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 5,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ",
            'english'       => "It is You we worship and You we ask for help.",
            'bangla'        => "“তোমারই আমরা এবাদত করি, এবং তোমারই কাছে আমরা সাহায্য প্রার্থনা করি।”",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 6,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ",
            'english'       => "Guide us to the straight path -",
            'bangla'        => "“আমাদের তুমি সহজ-সঠিক পথে পরিচালিত করো, --”",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 1,
            'ayah_no'       => 7,
            'page_no'       => 1,
            'jaz_no'        => 1,
            'arabic'        => "صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ",
            'english'       => "The path of those upon whom You have bestowed favor, not of those who have evoked [Your] anger or of those who are astray.",
            'bangla'        => "“তাদের পথে যাদের প্রতি তুমি নিয়ামত অর্পণ করেছ, তাদের ব্যতীত যাদের প্রতি গযব এসেছে, এবং তাদেরও নয় যারা পথভ্রষ্ট।”",
        ]);

        // Sura Bakara
        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 1,
            'page_no'       => 2,
            'jaz_no'        => 1,
            'arabic'        => "الم",
            'english'       => "Alif, Lam, Meem.",
            'bangla'        => "আলিফ, লাম, মীম।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 2,
            'page_no'       => 2,
            'jaz_no'        => 1,
            'arabic'        => "ذَٰلِكَ الْكِتَابُ لَا رَيْبَ ۛ فِيهِ ۛ هُدًى لِّلْمُتَّقِينَ",
            'english'       => "This is the Book about which there is no doubt, a guidance for those conscious of Allah -",
            'bangla'        => "ঐ গ্রন্থ, এতে কোনো সন্দেহ নেই, মুত্তকীদের জন্য পথপ্রদর্শক --",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 3,
            'page_no'       => 2,
            'jaz_no'        => 1,
            'arabic'        => "الَّذِينَ يُؤْمِنُونَ بِالْغَيْبِ وَيُقِيمُونَ الصَّلَاةَ وَمِمَّا رَزَقْنَاهُمْ يُنفِقُونَ",
            'english'       => "Who believe in the unseen, establish prayer, and spend out of what We have provided for them,",
            'bangla'        => "যারা গায়েবে ঈমান আনে, আর নামায কায়েম করে, আর আমরা যে রিযেক তাদের দিয়েছি তা থেকে তারা খরচ করে থাকে।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 4,
            'page_no'       => 2,
            'jaz_no'        => 1,
            'arabic'        => "وَالَّذِينَ يُؤْمِنُونَ بِمَا أُنزِلَ إِلَيْكَ وَمَا أُنزِلَ مِن قَبْلِكَ وَبِالْآخِرَةِ هُمْ يُوقِنُونَ",
            'english'       => "And who believe in what has been revealed to you, [O Muhammad], and what was revealed before you, and of the Hereafter they are certain [in faith].",
            'bangla'        => "আর তোমার কাছে যা-কিছু অবতীর্ণ হয়েছে তা’তে যারা ঈমান আনে, আর তোমার পূর্ববর্তীদের কাছে যা অবতীর্ণ হয়েছে তাতেও, আর আখেরাত সন্বন্ধে যারা দৃঢ়বিশ্বাস রাখে।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 5,
            'page_no'       => 2,
            'jaz_no'        => 1,
            'arabic'        => "أُولَـٰئِكَ عَلَىٰ هُدًى مِّن رَّبِّهِمْ ۖ وَأُولَـٰئِكَ هُمُ الْمُفْلِحُونَ",
            'english'       => "Those are upon [right] guidance from their Lord, and it is those who are the successful.",
            'bangla'        => "এরাই আছে তাদের প্রভুর তরফ থেকে হেদায়তের উপরে, আর এরা নিজেরাই হচ্ছে সফলকাম।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 6,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "إِنَّ الَّذِينَ كَفَرُوا سَوَاءٌ عَلَيْهِمْ أَأَنذَرْتَهُمْ أَمْ لَمْ تُنذِرْهُمْ لَا يُؤْمِنُونَ",
            'english'       => "Indeed, those who disbelieve - it is all the same for them whether you warn them or do not warn them - they will not believe.",
            'bangla'        => "অবশ্যই যারা অবিশ্বাস পোষণ করে, তাদের তুমি সতর্ক কর বা তাদের সতর্ক নাই কর তাদের কাছে সবই সমান, ওরা ঈমান আনবে না।",
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 7,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "خَتَمَ اللَّهُ عَلَىٰ قُلُوبِهِمْ وَعَلَىٰ سَمْعِهِمْ ۖ وَعَلَىٰ أَبْصَارِهِمْ غِشَاوَةٌ ۖ وَلَهُمْ عَذَابٌ عَظِيمٌ",
            'english'       => "Allah has set a seal upon their hearts and upon their hearing, and over their vision is a veil. And for them is a great punishment.",
            'bangla'        => "আল্লাহ্ তাদের হৃদয়ে সীল মেরে দিয়েছেন, এবং তাদের কানেও, আর তাদের চোখের উপরে পর্দা। আর তাদের জন্য আছে কঠোর শাস্তি।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 8,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "وَمِنَ النَّاسِ مَن يَقُولُ آمَنَّا بِاللَّهِ وَبِالْيَوْمِ الْآخِرِ وَمَا هُم بِمُؤْمِنِينَ",
            'english'       => "And of the people are some who say, \"We believe in Allah and the Last Day,\" but they are not believers.",
            'bangla'        => "আর মানুষের মাঝে কেউ-কেউ বলে থাকে -- “আমরা আল্লাহ্‌র প্রতি এবং আখেরাতের প্রতি ঈমান এনেছি”, অথচ তারা মুমিনদের মধ্যে নয়।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 9,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "يُخَادِعُونَ اللَّهَ وَالَّذِينَ آمَنُوا وَمَا يَخْدَعُونَ إِلَّا أَنفُسَهُمْ وَمَا يَشْعُرُونَ",
            'english'       => "They [think to] deceive Allah and those who believe, but they deceive not except themselves and perceive [it] not.",
            'bangla'        => "এরা চায় আল্লাহ্ ও যারা ঈমান এনেছে তারা যেন প্রতারিত হন। কিন্তু তারা প্রতারণা করছে নিজেদের ছাড়া আর কাউকে নয়, অথচ তারা বুঝতে পারছে না।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 10,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "فِي قُلُوبِهِم مَّرَضٌ فَزَادَهُمُ اللَّهُ مَرَضًا ۖ وَلَهُمْ عَذَابٌ أَلِيمٌ بِمَا كَانُوا يَكْذِبُونَ",
            'english'       => "In their hearts is disease, so Allah has increased their disease; and for them is a painful punishment because they [habitually] used to lie.",
            'bangla'        => "তাদের অন্তরে ব্যারাম, তাই আল্লাহ্ তাদের জন্য ব্যারাম বাড়িয়ে দিয়েছেন, আর তাদের জন্য ব্যথাদায়ক শাস্তি, যেহেতু তারা মিথ্যা বলে চলেছে।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 11,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "وَإِذَا قِيلَ لَهُمْ لَا تُفْسِدُوا فِي الْأَرْضِ قَالُوا إِنَّمَا نَحْنُ مُصْلِحُونَ",
            'english'       => "And when it is said to them, \"Do not cause corruption on the earth,\" they say, \"We are but reformers.\"",
            'bangla'        => "আর যখন তাদের বলা হলো -- “দুনিয়াতে তোমরা গন্ডগোল সৃষ্টি কর না”, তারা বলে -- “না তো, আমরা শান্তিকামী।”"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 12,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "أَلَا إِنَّهُمْ هُمُ الْمُفْسِدُونَ وَلَـٰكِن لَّا يَشْعُرُونَ",
            'english'       => "Unquestionably, it is they who are the corrupters, but they perceive [it] not.",
            'bangla'        => "তারা নিজেরাই কি নিশ্চয়ই গন্ডগোল সৃষ্টিকারী নয়? কিন্তু তারা বোঝে না।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 13,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "وَإِذَا قِيلَ لَهُمْ آمِنُوا كَمَا آمَنَ النَّاسُ قَالُوا أَنُؤْمِنُ كَمَا آمَنَ السُّفَهَاءُ ۗ أَلَا إِنَّهُمْ هُمُ السُّفَهَاءُ وَلَـٰكِن لَّا يَعْلَمُونَ",
            'english'       => "And when it is said to them, \"Believe as the people have believed,\" they say, \"Should we believe as the foolish have believed?\" Unquestionably, it is they who are the foolish, but they know [it] not.",
            'bangla'        => "আর যখন তাদের বলা হলো -- “তোমরাও ঈমান আনো যেমন লোকেরা ঈমান এনেছে”, তারা বললে -- “আমরা কি বিশ্বাস করব যেমন মূর্খরা বিশ্বাস করছে?” তারা নিজেরাই কি নিঃসন্দেহে মূর্খ নয়? কিন্তু তারা জানে না।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 14,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "وَإِذَا لَقُوا الَّذِينَ آمَنُوا قَالُوا آمَنَّا وَإِذَا خَلَوْا إِلَىٰ شَيَاطِينِهِمْ قَالُوا إِنَّا مَعَكُمْ إِنَّمَا نَحْنُ مُسْتَهْزِئُونَ",
            'english'       => "And when they meet those who believe, they say, \"We believe\"; but when they are alone with their evil ones, they say, \"Indeed, we are with you; we were only mockers.\"",
            'bangla'        => "আর যারা ঈমান এনেছে তাদের সাথে তারা যখন মিলিত হয় তখন বলে -- “আমরা ঈমান এনেছি” । আবার যখন তারা তাদের শয়তানদের সঙ্গে নিরিবিলি হয় তখন বলে -- “আমরা নিশ্চয়ই তোমাদের সাথে, আমরা শুধু মস্করা করছিলাম।”"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 15,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "اللَّهُ يَسْتَهْزِئُ بِهِمْ وَيَمُدُّهُمْ فِي طُغْيَانِهِمْ يَعْمَهُونَ",
            'english'       => "[But] Allah mocks them and prolongs them in their transgression [while] they wander blindly.",
            'bangla'        => "আল্লাহ্ তাদের প্রতি মস্করা ঘুরিয়ে পাঠান, এবং তাদের অন্যায় ক্রিয়া-কলাপের মধ্যে ঘুরপাক খেতে তাদের ছেড়ে দেন।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 16,
            'page_no'       => 3,
            'jaz_no'        => 1,
            'arabic'        => "أُولَـٰئِكَ الَّذِينَ اشْتَرَوُا الضَّلَالَةَ بِالْهُدَىٰ فَمَا رَبِحَت تِّجَارَتُهُمْ وَمَا كَانُوا مُهْتَدِينَ",
            'english'       => "Those are the ones who have purchased error [in exchange] for guidance, so their transaction has brought no profit, nor were they guided.",
            'bangla'        => "এরাই তারা যারা পথনির্দেশের বদলে পথভ্রষ্টতার কেনাকাটা করে, তাই তাদের ব্যবসা মুনাফা আনে না, আর তারা সৎপথপ্রাপ্ত হয় না।"
        ]);
    }
}
