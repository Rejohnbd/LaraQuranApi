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

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 17,
            'page_no'       => 4,
            'jaz_no'        => 1,
            'arabic'        => "مَثَلُهُمْ كَمَثَلِ الَّذِي اسْتَوْقَدَ نَارًا فَلَمَّا أَضَاءَتْ مَا حَوْلَهُ ذَهَبَ اللَّهُ بِنُورِهِمْ وَتَرَكَهُمْ فِي ظُلُمَاتٍ لَّا يُبْصِرُونَ",
            'english'       => "Their example is that of one who kindled a fire, but when it illuminated what was around him, Allah took away their light and left them in darkness [so] they could not see.",
            'bangla'        => "তাদের উপমা একজনের উদাহরণের মতো যিনি প্রদীপ জ্বালালেন, কিন্তু যখন এর চার পাশের সব-কিছু এ আলোকিত করল তখন আল্লাহ্ তাদের দীপ্তি নিয়ে নিলেন ও তাদের ফেলে রাখলেন ঘোর অন্ধকারে, তাই তারা পথঘাট দেখতে পায় না।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 18,
            'page_no'       => 4,
            'jaz_no'        => 1,
            'arabic'        => "صُمٌّ بُكْمٌ عُمْيٌ فَهُمْ لَا يَرْجِعُونَ",
            'english'       => "Deaf, dumb and blind - so they will not return [to the right path].",
            'bangla'        => "কালা, বোবা, অন্ধত্ব, গতিকে তারা ফিরতে পারে না।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 19,
            'page_no'       => 4,
            'jaz_no'        => 1,
            'arabic'        => "أَوْ كَصَيِّبٍ مِّنَ السَّمَاءِ فِيهِ ظُلُمَاتٌ وَرَعْدٌ وَبَرْقٌ يَجْعَلُونَ أَصَابِعَهُمْ فِي آذَانِهِم مِّنَ الصَّوَاعِقِ حَذَرَ الْمَوْتِ ۚ وَاللَّهُ مُحِيطٌ بِالْكَافِرِينَ",
            'english'       => "Or [it is] like a rainstorm from the sky within which is darkness, thunder and lightning. They put their fingers in their ears against the thunderclaps in dread of death. But Allah is encompassing of the disbelievers.",
            'bangla'        => "অথবা আকাশ থেকে আসা ঝড় বৃষ্টির মতো -- তার মাঝে আছে গাঢ় অন্ধকার এবং বজ্রপাত ও বিদ্যুতের ঝলকানি। তারা তাদের গোটা আঙ্গুলগুলো চেপে ধরে তাদের কানের ভেতরে বজ্রের শব্দে মরার ভয়ে। কিন্তু আল্লাহ্ অবিশ্বাসীদের ঘিরে ফেলেন।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 20,
            'page_no'       => 4,
            'jaz_no'        => 1,
            'arabic'        => "يَكَادُ الْبَرْقُ يَخْطَفُ أَبْصَارَهُمْ ۖ كُلَّمَا أَضَاءَ لَهُم مَّشَوْا فِيهِ وَإِذَا أَظْلَمَ عَلَيْهِمْ قَامُوا ۚ وَلَوْ شَاءَ اللَّهُ لَذَهَبَ بِسَمْعِهِمْ وَأَبْصَارِهِمْ ۚ إِنَّ اللَّهَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ",
            'english'       => "The lightning almost snatches away their sight. Every time it lights [the way] for them, they walk therein; but when darkness comes over them, they stand [still]. And if Allah had willed, He could have taken away their hearing and their sight. Indeed, Allah is over all things competent.",
            'bangla'        => "বিদ্যুতের ঝলকানি তাদের দৃষ্টি প্রায় ছিনিয়ে নিচ্ছিল। যতবার এ তাদের জন্য ঝিলিক দেয়, তারা এর মধ্যে হেটে চলে, আর যখনি তাদের উপরে অন্ধকার নেমে আসে, তারা দাঁড়িয়ে পড়ে। অথচ আল্লাহ্ যদি ইচ্ছা করতেন তিনি নিশ্চয়ই তাদের শ্রবণশক্তি ও তাদের দৃষ্টিশক্তি নিয়ে নিতে পারতেন। নিশ্চয়ই আল্লাহ্ সব-কিছুতে সর্বশক্তিমান।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 21,
            'page_no'       => 4,
            'jaz_no'        => 1,
            'arabic'        => "يَا أَيُّهَا النَّاسُ اعْبُدُوا رَبَّكُمُ الَّذِي خَلَقَكُمْ وَالَّذِينَ مِن قَبْلِكُمْ لَعَلَّكُمْ تَتَّقُونَ",
            'english'       => "O mankind, worship your Lord, who created you and those before you, that you may become righteous -",
            'bangla'        => "ওহে মানবজাতি! তোমাদের প্রভুর উপাসনা করো, যিনি তোমাদের সৃষ্টি করেছেন এবং তোমাদের পূর্ববর্তীদেরও, যাতে তোমরা ধর্মপরায়ণতা অবলন্বন করো।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 22,
            'page_no'       => 4,
            'jaz_no'        => 1,
            'arabic'        => "الَّذِي جَعَلَ لَكُمُ الْأَرْضَ فِرَاشًا وَالسَّمَاءَ بِنَاءً وَأَنزَلَ مِنَ السَّمَاءِ مَاءً فَأَخْرَجَ بِهِ مِنَ الثَّمَرَاتِ رِزْقًا لَّكُمْ ۖ فَلَا تَجْعَلُوا لِلَّهِ أَندَادًا وَأَنتُمْ تَعْلَمُونَ",
            'english'       => "[He] who made for you the earth a bed [spread out] and the sky a ceiling and sent down from the sky, rain and brought forth thereby fruits as provision for you. So do not attribute to Allah equals while you know [that there is nothing similar to Him].",
            'bangla'        => "যিনি তোমাদের জন্য পৃথিবীকে ফরাশ বানিয়েছেন, আর আকাশকে চাঁদোয়া, আর তিনি আকাশ থেকে পাঠান বৃষ্টি, তা’ দিয়ে তারপর ফলফসল উৎপাদন করেন তোমাদের জন্য রিযেক হিসেবে। অতএব আল্লাহ্‌র সাথে প্রতিদ্বন্ধী খাড়া করো না, অধিকন্তু তোমরা জানো।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 23,
            'page_no'       => 4,
            'jaz_no'        => 1,
            'arabic'        => "وَإِن كُنتُمْ فِي رَيْبٍ مِّمَّا نَزَّلْنَا عَلَىٰ عَبْدِنَا فَأْتُوا بِسُورَةٍ مِّن مِّثْلِهِ وَادْعُوا شُهَدَاءَكُم مِّن دُونِ اللَّهِ إِن كُنتُمْ صَادِقِينَ",
            'english'       => "And if you are in doubt about what We have sent down upon Our Servant [Muhammad], then produce a surah the like thereof and call upon your witnesses other than Allah, if you should be truthful.",
            'bangla'        => "আর যদি তোমরা সন্দেহের মাঝে থাকো এর সন্বন্ধে যা আমাদের বান্দার কাছে অবতারণ করেছি তা হলে এর মতো একটিমাত্র সূরা নিয়ে এস এবং আল্লাহ্ ছাড়া তোমাদের সাহায্যকারীদের ডাকো, যদি তোমরা সত্যবাদী হয়ে থাকো।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 24,
            'page_no'       => 4,
            'jaz_no'        => 1,
            'arabic'        => "فَإِن لَّمْ تَفْعَلُوا وَلَن تَفْعَلُوا فَاتَّقُوا النَّارَ الَّتِي وَقُودُهَا النَّاسُ وَالْحِجَارَةُ ۖ أُعِدَّتْ لِلْكَافِرِينَ",
            'english'       => "But if you do not - and you will never be able to - then fear the Fire, whose fuel is men and stones, prepared for the disbelievers.",
            'bangla'        => "কিন্তু যদি তোমরা না করো -- আর তোমরা কখনো পারবে না -- তাহলে আগুনকে ভয় কর যার জ্বালানি হচ্ছে মানুষ এবং পাথরগুলো, -- তৈরি হয়েছে অবিশ্বাসীদের জন্য।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 25,
            'page_no'       => 5,
            'jaz_no'        => 1,
            'arabic'        => 'وَبَشِّرِ الَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ أَنَّ لَهُمْ جَنَّاتٍ تَجْرِي مِن تَحْتِهَا الْأَنْهَارُ ۖ كُلَّمَا رُزِقُوا مِنْهَا مِن ثَمَرَةٍ رِّزْقًا ۙ قَالُوا هَـٰذَا الَّذِي رُزِقْنَا مِن قَبْلُ ۖ وَأُتُوا بِهِ مُتَشَابِهًا ۖ وَلَهُمْ فِيهَا أَزْوَاجٌ مُّطَهَّرَةٌ ۖ وَهُمْ فِيهَا خَالِدُونَ',
            'english'       => 'And give good tidings to those who believe and do righteous deeds that they will have gardens [in Paradise] beneath which rivers flow. Whenever they are provided with a provision of fruit therefrom, they will say, "This is what we were provided with before." And it is given to them in likeness. And they will have therein purified spouses, and they will abide therein eternally.',
            'bangla'        => "আর খুশখবর দাও তাদের যারা ঈমান এনেছে আর সৎকর্ম করে, তাদের জন্য আছে জান্নাত, যাদের নিচ দিয়ে বয়ে চলেছে ঝরনারাজি! যতবার এ থেকে ফলফসল তাদের খেতে দেয়া হয় তারা বলে -- “এ সেই যা এর আগে আমাদের খাওয়ানো হয়েছিল”, কারণ তাদের এ দেয়া হয় অনুকরণে। আর তাদের জন্য এর মধ্যে আছে পবিত্র সঙ্গিসাথী আর এতে তারা থাকবে চিরকাল।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 26,
            'page_no'       => 5,
            'jaz_no'        => 1,
            'arabic'        => 'إِنَّ اللَّهَ لَا يَسْتَحْيِي أَن يَضْرِبَ مَثَلًا مَّا بَعُوضَةً فَمَا فَوْقَهَا ۚ فَأَمَّا الَّذِينَ آمَنُوا فَيَعْلَمُونَ أَنَّهُ الْحَقُّ مِن رَّبِّهِمْ ۖ وَأَمَّا الَّذِينَ كَفَرُوا فَيَقُولُونَ مَاذَا أَرَادَ اللَّهُ بِهَـٰذَا مَثَلًا ۘ يُضِلُّ بِهِ كَثِيرًا وَيَهْدِي بِهِ كَثِيرًا ۚ وَمَا يُضِلُّ بِهِ إِلَّا الْفَاسِقِينَ',
            'english'       => 'Indeed, Allah is not timid to present an example - that of a mosquito or what is smaller than it. And those who have believed know that it is the truth from their Lord. But as for those who disbelieve, they say, "What did Allah intend by this as an example?" He misleads many thereby and guides many thereby. And He misleads not except the defiantly disobedient,',
            'bangla'        => "অবশ্যই আল্লাহ্ উপমা ছুড়ঁতে লজ্জিত হন না, যথা মশার অথবা তার চাইতে উপরের কিছুর। সুতরাং যারা ঈমান এনেছে তারা জানে যে এ নিশ্চয়ই তাদের প্রভুর কাছ থেকে সত্য। আর যারা অবিশ্বাস পোষণ করে তারা বলে -- “আল্লাহ্ এমন একটি উপমাদ্বারা কী চান?” এর দ্বারা তিনি অনেককে বিপথে চলতে দেন এবং অনেককে এর সাহায্যে সৎপথগামী করেন। তিনি কিন্তু ভ্রষ্টাচারী ভিন্ন কাউকেও এর মাধ্যমে বিপথে চলতে দেন না।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 27,
            'page_no'       => 5,
            'jaz_no'        => 1,
            'arabic'        => 'الَّذِينَ يَنقُضُونَ عَهْدَ اللَّهِ مِن بَعْدِ مِيثَاقِهِ وَيَقْطَعُونَ مَا أَمَرَ اللَّهُ بِهِ أَن يُوصَلَ وَيُفْسِدُونَ فِي الْأَرْضِ ۚ أُولَـٰئِكَ هُمُ الْخَاسِرُونَ',
            'english'       => 'Who break the covenant of Allah after contracting it and sever that which Allah has ordered to be joined and cause corruption on earth. It is those who are the losers.',
            'bangla'        => "যারা আল্লাহ্‌র চুক্তি ভঙ্গ করে এর সুদৃঢ়ীকরণ হবার পরেও, আর কেটে দেয় যা এর দ্বারা বহাল রাখার জন্য আল্লাহ্ আদেশ করেছিলেন, আর পৃথিবীতে ফসাদ সৃষ্টি করে। তারা নিজেরাই ক্ষতিগ্রস্ত হয়।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 28,
            'page_no'       => 5,
            'jaz_no'        => 1,
            'arabic'        => 'كَيْفَ تَكْفُرُونَ بِاللَّهِ وَكُنتُمْ أَمْوَاتًا فَأَحْيَاكُمْ ۖ ثُمَّ يُمِيتُكُمْ ثُمَّ يُحْيِيكُمْ ثُمَّ إِلَيْهِ تُرْجَعُونَ',
            'english'       => 'How can you disbelieve in Allah when you were lifeless and He brought you to life; then He will cause you to die, then He will bring you [back] to life, and then to Him you will be returned.',
            'bangla'        => "তোমরা কেমন করে আল্লাহ্‌র প্রতি অবিশ্বাস পোষণ করো যেহেতু তোমরা নিস্প্রাণ ছিলে, তখন তোমাদের তিনি জীবন দান করেছেন? তারপর তিনি তোমাদের মৃত্যু ঘটাবেন ও আবার তোমাদের পুনর্জীবিত করবেন, তখন তাঁরই দরবারে তোমাদের ফিরিয়ে নেয়া হবে।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 29,
            'page_no'       => 5,
            'jaz_no'        => 1,
            'arabic'        => 'هُوَ الَّذِي خَلَقَ لَكُم مَّا فِي الْأَرْضِ جَمِيعًا ثُمَّ اسْتَوَىٰ إِلَى السَّمَاءِ فَسَوَّاهُنَّ سَبْعَ سَمَاوَاتٍ ۚ وَهُوَ بِكُلِّ شَيْءٍ عَلِيمٌ',
            'english'       => 'It is He who created for you all of that which is on the earth. Then He directed Himself to the heaven, [His being above all creation], and made them seven heavens, and He is Knowing of all things.',
            'bangla'        => "তিনিই সেইজন যিনি ঘূর্ণায়মান-পৃথিবীতে যা-কিছু আছে সবই তোমাদের জন্য সৃষ্টি করেছেন, তাছাড়া তিনি মহাকাশের প্রতি খেয়াল করলেন, তাই তাদের তিনি সাত আসমানে পরিপূর্ণ করলেন। আর তিনি সব-কিছু সন্বন্ধে সর্বজ্ঞাতা।"
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 30,
            'page_no'       => 6,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قَالَ رَبُّكَ لِلْمَلَائِكَةِ إِنِّي جَاعِلٌ فِي الْأَرْضِ خَلِيفَةً ۖ قَالُوا أَتَجْعَلُ فِيهَا مَن يُفْسِدُ فِيهَا وَيَسْفِكُ الدِّمَاءَ وَنَحْنُ نُسَبِّحُ بِحَمْدِكَ وَنُقَدِّسُ لَكَ ۖ قَالَ إِنِّي أَعْلَمُ مَا لَا تَعْلَمُونَ',
            'english'       => 'And [mention, O Muhammad], when your Lord said to the angels, "Indeed, I will make upon the earth a successive authority." They said, "Will You place upon it one who causes corruption therein and sheds blood, while we declare Your praise and sanctify You?" Allah said, "Indeed, I know that which you do not know."',
            'bangla'        => 'আর স্মরণ কর, -- তোমার প্রভু ফিরিশ্‌তাদের বললেন, “আমি অবশ্যই পৃথিবীতে খলিফা বসাতে যাচ্ছি।” তারা বলল -- “তুমি কি উহাতে এমন কাউকে বসাচ্ছ যে তার মধ্যে ফসাদ সৃষ্টি করবে ও রক্তপাত করবে, অথচ আমরা তোমার স্তুতির গুণগান করছি ও তোমারই পবিত্রতার জয়গান গাইছি।” তিনি বললেন -- “আমি নিঃসন্দেহে তা জানি যা তোমরা জানো না।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 31,
            'page_no'       => 6,
            'jaz_no'        => 1,
            'arabic'        => 'وَعَلَّمَ آدَمَ الْأَسْمَاءَ كُلَّهَا ثُمَّ عَرَضَهُمْ عَلَى الْمَلَائِكَةِ فَقَالَ أَنبِئُونِي بِأَسْمَاءِ هَـٰؤُلَاءِ إِن كُنتُمْ صَادِقِينَ',
            'english'       => 'And He taught Adam the names - all of them. Then He showed them to the angels and said, "Inform Me of the names of these, if you are truthful."',
            'bangla'        => 'তখন তিনি আদমকে নামাবলী -- তাদের সব-কিছু শিখিয়ে দিলেন, তারপর তিনি ফিরিশ্‌তাদের কাছে তাদের স্থাপন করলেন ও বললেন, -- “আমাকে এই সমস্তের নামাবলী বর্ণনা কর, যদি তোমরা সঠিক হয়ে থাকো।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 32,
            'page_no'       => 6,
            'jaz_no'        => 1,
            'arabic'        => '',
            'english'       => 'They said, "Exalted are You; we have no knowledge except what You have taught us. Indeed, it is You who is the Knowing, the Wise."',
            'bangla'        => 'তারা বলল -- “তোমারই সব মহিমা! আমাদের যা শিখিয়েছ তা ছাড়া আমাদের জ্ঞান নেই! নিঃসন্দেহ তুমি নিজেই সর্বজ্ঞাতা, পরমজ্ঞানী।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 33,
            'page_no'       => 6,
            'jaz_no'        => 1,
            'arabic'        => 'قَالُوا سُبْحَانَكَ لَا عِلْمَ لَنَا إِلَّا مَا عَلَّمْتَنَا ۖ إِنَّكَ أَنتَ الْعَلِيمُ الْحَكِيمُ',
            'english'       => 'He said, "O Adam, inform them of their names." And when he had informed them of their names, He said, "Did I not tell you that I know the unseen [aspects] of the heavens and the earth? And I know what you reveal and what you have concealed."',
            'bangla'        => 'তিনি বললেন -- “হে আদম! এ-সবের নামাবলী এদের কাছে বর্ণনা কর।” তাই সে যখন তাদের কাছে এ-সবের নামাবলী বর্ণনা করল, তিনি বললেন -- “আমি কি তোমাদের বলি নি যে আমি নিশ্চয়ই মহাকাশমন্ডলী ও পৃথিবীর রহস্যসব জানি? আর আমি জানি যা তোমরা প্রকাশ করেছ, আর যা তোমরা লুকিয়ে রেখে চলেছ।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 34,
            'page_no'       => 6,
            'jaz_no'        => 1,
            'arabic'        => 'قَالَ يَا آدَمُ أَنبِئْهُم بِأَسْمَائِهِمْ ۖ فَلَمَّا أَنبَأَهُم بِأَسْمَائِهِمْ قَالَ أَلَمْ أَقُل لَّكُمْ إِنِّي أَعْلَمُ غَيْبَ السَّمَاوَاتِ وَالْأَرْضِ وَأَعْلَمُ مَا تُبْدُونَ وَمَا كُنتُمْ تَكْتُمُونَ',
            'english'       => 'And [mention] when We said to the angels, "Prostrate before Adam"; so they prostrated, except for Iblees. He refused and was arrogant and became of the disbelievers.',
            'bangla'        => 'আর স্মরণ করো! আমরা ফিরিশ্‌তাদের বললাম -- “আদমের প্রতি সিজদা করো।” সুতরাং তারা সিজদা করল, কিন্তু ইবলিস করলনা, কারণ সে ছিল কাফিরদের অন্তর্ভুক্ত।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 35,
            'page_no'       => 6,
            'jaz_no'        => 1,
            'arabic'        => 'وَقُلْنَا يَا آدَمُ اسْكُنْ أَنتَ وَزَوْجُكَ الْجَنَّةَ وَكُلَا مِنْهَا رَغَدًا حَيْثُ شِئْتُمَا وَلَا تَقْرَبَا هَـٰذِهِ الشَّجَرَةَ فَتَكُونَا مِنَ الظَّالِمِينَ',
            'english'       => 'And We said, "O Adam, dwell, you and your wife, in Paradise and eat therefrom in [ease and] abundance from wherever you will. But do not approach this tree, lest you be among the wrongdoers."',
            'bangla'        => 'আর আমরা বললাম, -- “হে আদম! তুমি ও তোমার সঙ্গিনী এই বাগানে অবস্থান কর, আর সেখান থেকে যখন-যেখানে ইচ্ছা কর ভরপুরভাবে পানাহার কর, কিন্তু এই বৃক্ষের ধারেকাছেও যেও না, নতুবা তোমরা দুরাচারদের অন্তর্ভুক্ত হয়ে যাবে।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 36,
            'page_no'       => 6,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قُلْنَا لِلْمَلَائِكَةِ اسْجُدُوا لِآدَمَ فَسَجَدُوا إِلَّا إِبْلِيسَ أَبَىٰ وَاسْتَكْبَرَ وَكَانَ مِنَ الْكَافِرِينَ',
            'english'       => 'But Satan caused them to slip out of it and removed them from that [condition] in which they had been. And We said, "Go down, [all of you], as enemies to one another, and you will have upon the earth a place of settlement and provision for a time."',
            'bangla'        => 'কিন্তু শয়তান তাদের সেখান থেকে পদস্খলিত করল, আর যেখানে তারা থাকত সেখান থেকে তাদের বের করে দিল। তখন আমরা বললাম -- “তোমরা অধঃপাতে যাও, তোমাদের কেউ কেউ একে অন্যের শত্রু। আর তোমাদের জন্য পৃথিবীতে আছে জিরানোর স্থান ও কিছু সময়ের সংস্থান।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 37,
            'page_no'       => 6,
            'jaz_no'        => 1,
            'arabic'        => 'فَتَلَقَّىٰ آدَمُ مِن رَّبِّهِ كَلِمَاتٍ فَتَابَ عَلَيْهِ ۚ إِنَّهُ هُوَ التَّوَّابُ الرَّحِيمُ',
            'english'       => 'Then Adam received from his Lord [some] words, and He accepted his repentance. Indeed, it is He who is the Accepting of repentance, the Merciful.',
            'bangla'        => 'তখন আদম তার প্রভুর কাছ থেকে কিছু কথা শিখে নিলে, তাই তিনি তার দিকে ফিরলেন। নিঃসন্দেহ তিনি নিজেই সদা ফেরেন, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 38,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'قُلْنَا اهْبِطُوا مِنْهَا جَمِيعًا ۖ فَإِمَّا يَأْتِيَنَّكُم مِّنِّي هُدًى فَمَن تَبِعَ هُدَايَ فَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ',
            'english'       => 'We said, "Go down from it, all of you. And when guidance comes to you from Me, whoever follows My guidance - there will be no fear concerning them, nor will they grieve.',
            'bangla'        => 'আমরা বললাম -- “তোমরা সব্বাই মিলে এখান থেকে নেমে পড়ো। কিন্তু যদি তোমাদের কাছে আমার তরফ থেকে হেদায়ত আসে, তবে যারা আমার পথনির্দেশ মেনে চলবে তাদের উপর কিন্তু কোনো ভয় নেই, আর তারা নিজেরা অনুতাপও করবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 39,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'وَالَّذِينَ كَفَرُوا وَكَذَّبُوا بِآيَاتِنَا أُولَـٰئِكَ أَصْحَابُ النَّارِ ۖ هُمْ فِيهَا خَالِدُونَ',
            'english'       => 'And those who disbelieve and deny Our signs - those will be companions of the Fire; they will abide therein eternally."',
            'bangla'        => '“কিন্তু যারা অবিশ্বাস পোষণ করে ও আমাদের আয়াতসমূহে মিথ্যারোপ করে, তারাই হচ্ছে আগুনের বাসিন্দা, তারা তার মধ্যে থাকবে দীর্ঘকাল।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 40,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'يَا بَنِي إِسْرَائِيلَ اذْكُرُوا نِعْمَتِيَ الَّتِي أَنْعَمْتُ عَلَيْكُمْ وَأَوْفُوا بِعَهْدِي أُوفِ بِعَهْدِكُمْ وَإِيَّايَ فَارْهَبُونِ',
            'english'       => 'O Children of Israel, remember My favor which I have bestowed upon you and fulfill My covenant [upon you] that I will fulfill your covenant [from Me], and be afraid of [only] Me.',
            'bangla'        => 'হে ইসরাইলের বংশধরগণ! আমার নিয়ামত স্মরণ করো, যা আমি তোমাদের প্রদান করেছিলাম, আর আমার সাথের চুক্তি তোমরা বহাল রাখো, আমিও তোমাদের সাথের চুক্তি বহাল রাখব। আর আমাকে, শুধু আমাকে, তোমরা ভয় করবে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 41,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'وَآمِنُوا بِمَا أَنزَلْتُ مُصَدِّقًا لِّمَا مَعَكُمْ وَلَا تَكُونُوا أَوَّلَ كَافِرٍ بِهِ ۖ وَلَا تَشْتَرُوا بِآيَاتِي ثَمَنًا قَلِيلًا وَإِيَّايَ فَاتَّقُونِ',
            'english'       => 'And believe in what I have sent down confirming that which is [already] with you, and be not the first to disbelieve in it. And do not exchange My signs for a small price, and fear [only] Me.',
            'bangla'        => 'আর আমি যা অবতারণ করেছি তাতে তোমরা ঈমান আনো, -- তোমাদের কাছে যা রয়েছে তার সত্য-সমর্থনরূপে, এমতাবস্থায় তোমরা এতে অবিশ্বাসকারীদের পুরোভাগে থেকো না, আর আমার প্রত্যাদেশের বিনিময়ে তুচ্ছ বস্তু কামাতে যেও না, আর আমাকে, শুধু আমাকে, তোমরা ভয়-শ্রদ্ধা করবে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 42,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَا تَلْبِسُوا الْحَقَّ بِالْبَاطِلِ وَتَكْتُمُوا الْحَقَّ وَأَنتُمْ تَعْلَمُونَ',
            'english'       => 'And do not mix the truth with falsehood or conceal the truth while you know [it].',
            'bangla'        => 'আর সত্যকে তোমরা মিথ্যার পোশাক পরিয়ো না বা সত্যকে গোপন কর না, অথচ তোমরা জানো।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 43,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'وَأَقِيمُوا الصَّلَاةَ وَآتُوا الزَّكَاةَ وَارْكَعُوا مَعَ الرَّاكِعِينَ',
            'english'       => 'And establish prayer and give zakah and bow with those who bow [in worship and obedience].',
            'bangla'        => 'আর তোমরা নামায কায়েম করো ও যাকাত আদায় করো, আর রুকুকারীদের সাথে রুকু করো।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 44,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'أَتَأْمُرُونَ النَّاسَ بِالْبِرِّ وَتَنسَوْنَ أَنفُسَكُمْ وَأَنتُمْ تَتْلُونَ الْكِتَابَ ۚ أَفَلَا تَعْقِلُونَ',
            'english'       => 'Do you order righteousness of the people and forget yourselves while you recite the Scripture? Then will you not reason?',
            'bangla'        => 'তোমরা কি লোকজনকে ধার্মিকতা করতে আদেশ কর আর নিজের বেলায় স্রেফ ভুলে যাও, অথচ তোমরা ধর্মগ্রন্থ পড়ে থাক? তোমাদের কি কান্ডজ্ঞান নেই?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 45,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'وَاسْتَعِينُوا بِالصَّبْرِ وَالصَّلَاةِ ۚ وَإِنَّهَا لَكَبِيرَةٌ إِلَّا عَلَى الْخَاشِعِينَ',
            'english'       => 'And seek help through patience and prayer, and indeed, it is difficult except for the humbly submissive [to Allah]',
            'bangla'        => 'আর তোমরা ধৈর্য ধরে ও নামায পড়ে সাহায্য কামনা করো। আর এটি নিশ্চয়ই বড় কঠিন, শুধু বিনয়ীদের ছাড়া, --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 46,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'الَّذِينَ يَظُنُّونَ أَنَّهُم مُّلَاقُو رَبِّهِمْ وَأَنَّهُمْ إِلَيْهِ رَاجِعُونَ',
            'english'       => 'Who are certain that they will meet their Lord and that they will return to Him.',
            'bangla'        => 'যারা স্মরণ রাখে যে তারা নিশ্চয়ই তাদের প্রভুর সাথে মোলাকাত করতে যাচ্ছে, আর তারা অবশ্যই তাঁর কাছে প্রত্যাবর্তনকারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 47,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'يَا بَنِي إِسْرَائِيلَ اذْكُرُوا نِعْمَتِيَ الَّتِي أَنْعَمْتُ عَلَيْكُمْ وَأَنِّي فَضَّلْتُكُمْ عَلَى الْعَالَمِينَ',
            'english'       => 'O Children of Israel, remember My favor that I have bestowed upon you and that I preferred you over the worlds.',
            'bangla'        => 'হে ইসরাইলের বংশধরগণ! আমার নিয়ামত স্মরণ করো যা আমি তোমাদের প্রদান করেছিলাম ও কিভাবে মানবগোষ্ঠীর উপর তোমাদের মর্যাদা দিয়েছিলাম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 48,
            'page_no'       => 7,
            'jaz_no'        => 1,
            'arabic'        => 'وَاتَّقُوا يَوْمًا لَّا تَجْزِي نَفْسٌ عَن نَّفْسٍ شَيْئًا وَلَا يُقْبَلُ مِنْهَا شَفَاعَةٌ وَلَا يُؤْخَذُ مِنْهَا عَدْلٌ وَلَا هُمْ يُنصَرُونَ',
            'english'       => 'And fear a Day when no soul will suffice for another soul at all, nor will intercession be accepted from it, nor will compensation be taken from it, nor will they be aided.',
            'bangla'        => 'আর সতর্কতা অবলন্বন করো এমন এক দিনের একজন অন্যজনের কাছ থেকে কোনো প্রকার সাহায্য পাবে না, আর তার থেকে কোনো সুপারিশ কবুল করা হবে না বা তার থেকে কোনো খেসারতও নেওয়া হবে না, আর তাদের সাহায্য দেয়া হবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 49,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ نَجَّيْنَاكُم مِّنْ آلِ فِرْعَوْنَ يَسُومُونَكُمْ سُوءَ الْعَذَابِ يُذَبِّحُونَ أَبْنَاءَكُمْ وَيَسْتَحْيُونَ نِسَاءَكُمْ ۚ وَفِي ذَٰلِكُم بَلَاءٌ مِّن رَّبِّكُمْ عَظِيمٌ',
            'english'       => 'And [recall] when We saved your forefathers from the people of Pharaoh, who afflicted you with the worst torment, slaughtering your [newborn] sons and keeping your females alive. And in that was a great trial from your Lord.',
            'bangla'        => 'আর স্মরণ করো! তোমাদের আমরা ফিরআউনের লোকদের থেকে মুক্ত করেছিলাম, যারা তোমাদের নির্যাতন করেছিল কঠোর যন্ত্রণায়, তারা হত্যা করত তোমাদের পুত্র সন্তানদের ও বাঁচতে দিত তোমাদের নারীদের। আর এতে তোমাদের জন্যে তোমাদের প্রভুর কাছ থেকে ছিল কঠোর পরীক্ষা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 50,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ فَرَقْنَا بِكُمُ الْبَحْرَ فَأَنجَيْنَاكُمْ وَأَغْرَقْنَا آلَ فِرْعَوْنَ وَأَنتُمْ تَنظُرُونَ',
            'english'       => 'And [recall] when We parted the sea for you and saved you and drowned the people of Pharaoh while you were looking on.',
            'bangla'        => 'আর স্মরণ করো! আমরা তোমাদের জন্যে সাগরকে করেছিলাম বিভক্ত, তাতে উদ্ধার করেছিলাম তোমাদের, আর আমরা ডুবিয়েছিলাম ফিরআউনের লোকদের, আর তোমরা চেয়ে দেখেছিলে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 51,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ وَاعَدْنَا مُوسَىٰ أَرْبَعِينَ لَيْلَةً ثُمَّ اتَّخَذْتُمُ الْعِجْلَ مِن بَعْدِهِ وَأَنتُمْ ظَالِمُونَ',
            'english'       => 'And [recall] when We made an appointment with Moses for forty nights. Then you took [for worship] the calf after him, while you were wrongdoers.',
            'bangla'        => 'আর স্মরণ করো! আমরা মূসার সঙ্গে চল্লিশ রাত্রি নির্ধারিত করেছিলাম, তখন তোমরা বাছুরকে তাঁর অনুপস্থিতিতে গ্রহণ করলে, আর তোমরা হলে অন্যায়কারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 52,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'ثُمَّ عَفَوْنَا عَنكُم مِّن بَعْدِ ذَٰلِكَ لَعَلَّكُمْ تَشْكُرُونَ',
            'english'       => 'Then We forgave you after that so perhaps you would be grateful.',
            'bangla'        => 'শেষে এর পরেও আমরা তোমাদের ক্ষমা করেছিলাম যাতে তোমরা কৃতজ্ঞতা জ্ঞাপন কর।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 53,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ آتَيْنَا مُوسَى الْكِتَابَ وَالْفُرْقَانَ لَعَلَّكُمْ تَهْتَدُونَ',
            'english'       => 'And [recall] when We gave Moses the Scripture and criterion that perhaps you would be guided.',
            'bangla'        => 'আর স্মরণ করো! আমরা মূসাকে দিয়েছিলাম ধর্মগ্রন্থ তথা ফুরকান যাতে তোমরা সুপথগামী হতে পার।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 54,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قَالَ مُوسَىٰ لِقَوْمِهِ يَا قَوْمِ إِنَّكُمْ ظَلَمْتُمْ أَنفُسَكُم بِاتِّخَاذِكُمُ الْعِجْلَ فَتُوبُوا إِلَىٰ بَارِئِكُمْ فَاقْتُلُوا أَنفُسَكُمْ ذَٰلِكُمْ خَيْرٌ لَّكُمْ عِندَ بَارِئِكُمْ فَتَابَ عَلَيْكُمْ ۚ إِنَّهُ هُوَ التَّوَّابُ الرَّحِيمُ',
            'english'       => 'And [recall] when Moses said to his people, "O my people, indeed you have wronged yourselves by your taking of the calf [for worship]. So repent to your Creator and kill yourselves. That is best for [all of] you in the sight of your Creator." Then He accepted your repentance; indeed, He is the Accepting of repentance, the Merciful.',
            'bangla'        => 'আর স্মরণ করো! মূসা তাঁর লোকদের বলেছিলেন, -- “হে আমার অনুচরবর্গ, তোমরা নিশ্চয়ই তোমাদের প্রতি অন্যায় করেছ বাছুরকে গ্রহণ ক’রে, অতএব তোমাদের সৃষ্টিকর্তার দিকে ফেরো ও নিজেদের সংহার করো। ইহা তোমাদের সৃষ্টিকর্তার সমীপে তোমাদের জন্য মঙ্গলময়।” তাই তিনি তোমাদের দিকে ফিরলেন। নিঃসন্দেহ তিনি নিজেই সদা ফেরেন, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 55,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قُلْتُمْ يَا مُوسَىٰ لَن نُّؤْمِنَ لَكَ حَتَّىٰ نَرَى اللَّهَ جَهْرَةً فَأَخَذَتْكُمُ الصَّاعِقَةُ وَأَنتُمْ تَنظُرُونَ',
            'english'       => 'And [recall] when you said, "O Moses, we will never believe you until we see Allah outright"; so the thunderbolt took you while you were looking on.',
            'bangla'        => 'আর স্মরণ করো! তোমরা বললে -- “হে মূসা, আমরা তোমার প্রতি কখনো ঈমান আনব না যে পর্যন্ত না আমরা প্রকাশ্যভাবে আল্লাহ্‌কে দেখতে পাই।” তাই বজ্রাঘাত তোমাদের পাকড়ালো, আর তোমরা তাকিয়ে থাকলে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 56,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'ثُمَّ بَعَثْنَاكُم مِّن بَعْدِ مَوْتِكُمْ لَعَلَّكُمْ تَشْكُرُونَ',
            'english'       => 'Then We revived you after your death that perhaps you would be grateful.',
            'bangla'        => 'তারপর তোমাদের জাগিয়ে তুললাম তোমাদের মৃতবৎ হবার পরে, যাতে তোমরা কৃতজ্ঞতা জ্ঞাপন করতে পার।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 57,
            'page_no'       => 8,
            'jaz_no'        => 1,
            'arabic'        => 'وَظَلَّلْنَا عَلَيْكُمُ الْغَمَامَ وَأَنزَلْنَا عَلَيْكُمُ الْمَنَّ وَالسَّلْوَىٰ ۖ كُلُوا مِن طَيِّبَاتِ مَا رَزَقْنَاكُمْ ۖ وَمَا ظَلَمُونَا وَلَـٰكِن كَانُوا أَنفُسَهُمْ يَظْلِمُونَ',
            'english'       => 'And We shaded you with clouds and sent down to you manna and quails, [saying], "Eat from the good things with which We have provided you." And they wronged Us not - but they were [only] wronging themselves.',
            'bangla'        => 'আর তোমাদের উপরে আমরা মেঘ দিয়ে আচ্ছাদন করেছিলাম, আর তোমাদের কাছে পাঠিয়েছিলাম \'মান্না’ ও \'সালওয়া’। “তোমাদের যে-সব ভাল ভাল রিযেক দিয়েছি তা খেয়ে যাও।” কিন্তু তারা আমাদের কোনো অনিষ্ট করে নি, বরং তারা নিজেদেরই প্রতি অনিষ্ট করছিল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 58,
            'page_no'       => 9,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قُلْنَا ادْخُلُوا هَـٰذِهِ الْقَرْيَةَ فَكُلُوا مِنْهَا حَيْثُ شِئْتُمْ رَغَدًا وَادْخُلُوا الْبَابَ سُجَّدًا وَقُولُوا حِطَّةٌ نَّغْفِرْ لَكُمْ خَطَايَاكُمْ ۚ وَسَنَزِيدُ الْمُحْسِنِينَ',
            'english'       => 'And [recall] when We said, "Enter this city and eat from it wherever you will in [ease and] abundance, and enter the gate bowing humbly and say, \'Relieve us of our burdens.\' We will [then] forgive your sins for you, and We will increase the doers of good [in goodness and reward]."',
            'bangla'        => 'আর স্মরণ করো! আমরা বললাম -- “এই শহরে প্রবেশ কর, আর সেখান থেকে যখন-যেখানে ইচ্ছা কর ভরপুরভাবে পানাহার করো, আর সদর-দরজা দিয়ে নতশিরে প্রবেশ করো ও বলো \'হিৎতাতুন’, যাতে তোমাদের দোষত্রুটিগুলো আমরা তোমাদের জন্য ক্ষমা করে দিতে পারি, আর বাড়িয়ে দিতে পারি শুভকর্মীদের জন্য।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 59,
            'page_no'       => 9,
            'jaz_no'        => 1,
            'arabic'        => 'فَبَدَّلَ الَّذِينَ ظَلَمُوا قَوْلًا غَيْرَ الَّذِي قِيلَ لَهُمْ فَأَنزَلْنَا عَلَى الَّذِينَ ظَلَمُوا رِجْزًا مِّنَ السَّمَاءِ بِمَا كَانُوا يَفْسُقُونَ',
            'english'       => 'But those who wronged changed [those words] to a statement other than that which had been said to them, so We sent down upon those who wronged a punishment from the sky because they were defiantly disobeying.',
            'bangla'        => 'কিন্তু যারা অন্যায় করে তারা যা বলা হয়েছিল তার বিপরীত কথায় তা বদলে দিল। তাই যারা অন্যায় করেছিল তাদের উপরে আকাশ থেকে আমরা মহামারী পাঠিয়েছিলাম, কারণ তারা পাপাচার করছিল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 60,
            'page_no'       => 9,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذِ اسْتَسْقَىٰ مُوسَىٰ لِقَوْمِهِ فَقُلْنَا اضْرِب بِّعَصَاكَ الْحَجَرَ ۖ فَانفَجَرَتْ مِنْهُ اثْنَتَا عَشْرَةَ عَيْنًا ۖ قَدْ عَلِمَ كُلُّ أُنَاسٍ مَّشْرَبَهُمْ ۖ كُلُوا وَاشْرَبُوا مِن رِّزْقِ اللَّهِ وَلَا تَعْثَوْا فِي الْأَرْضِ مُفْسِدِينَ',
            'english'       => 'And [recall] when Moses prayed for water for his people, so We said, "Strike with your staff the stone." And there gushed forth from it twelve springs, and every people knew its watering place. "Eat and drink from the provision of Allah, and do not commit abuse on the earth, spreading corruption."',
            'bangla'        => 'আর স্মরণ করো! মূসা তাঁর লোকদের জন্য পানি চাইলেন, তাই আমরা বললাম, -- “তোমার লাঠি দিয়ে পাথরে আঘাত করো।” তখন তা থেকে বারোটি প্রস্রবন বেরিয়ে পড়লো। প্রত্যেক উপদল নিজ জলপান-স্থান চিনে নিলো। “আল্লাহ্‌র রিযেক থেকে খাও ও পান করো, আর ফসাদী হয়ে দুনিয়াতে অন্যায়াচরণ করো না।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 61,
            'page_no'       => 9,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قُلْتُمْ يَا مُوسَىٰ لَن نَّصْبِرَ عَلَىٰ طَعَامٍ وَاحِدٍ فَادْعُ لَنَا رَبَّكَ يُخْرِجْ لَنَا مِمَّا تُنبِتُ الْأَرْضُ مِن بَقْلِهَا وَقِثَّائِهَا وَفُومِهَا وَعَدَسِهَا وَبَصَلِهَا ۖ قَالَ أَتَسْتَبْدِلُونَ الَّذِي هُوَ أَدْنَىٰ بِالَّذِي هُوَ خَيْرٌ ۚ اهْبِطُوا مِصْرًا فَإِنَّ لَكُم مَّا سَأَلْتُمْ ۗ وَضُرِبَتْ عَلَيْهِمُ الذِّلَّةُ وَالْمَسْكَنَةُ وَبَاءُوا بِغَضَبٍ مِّنَ اللَّهِ ۗ ذَٰلِكَ بِأَنَّهُمْ كَانُوا يَكْفُرُونَ بِآيَاتِ اللَّهِ وَيَقْتُلُونَ النَّبِيِّينَ بِغَيْرِ الْحَقِّ ۗ ذَٰلِكَ بِمَا عَصَوا وَّكَانُوا يَعْتَدُونَ',
            'english'       => 'And [recall] when you said, "O Moses, we can never endure one [kind of] food. So call upon your Lord to bring forth for us from the earth its green herbs and its cucumbers and its garlic and its lentils and its onions." [Moses] said, "Would you exchange what is better for what is less? Go into [any] settlement and indeed, you will have what you have asked." And they were covered with humiliation and poverty and returned with anger from Allah [upon them]. That was because they [repeatedly] disbelieved in the signs of Allah and killed the prophets without right. That was because they disobeyed and were [habitually] transgressing.',
            'bangla'        => 'আর স্মরণ করো! তোমরা বলেছিলে -- “হে মূসা! আমরা একই খাবারে সন্তষ্ট থাকতে পারছি না, তাই তোমার প্রভুর কাছে আমাদের জন্য প্রার্থনা করো যাতে তিনি আমাদের জন্য উৎপন্ন করেন মাটি যা উৎপাদিত করে, যেমন তার সবজি ও তার শস্য ও তার মসূর ও তার পেয়াঁজ।” তিনি বললেন -- “তোমরা কি বদল করে নিতে চাও যা নিকৃষ্ট তার সঙ্গে যা উৎকৃষ্ট? নেমে যাও কোনো মিশরে, তাহলে তোমরা যা চাও তাই পাবে।” আর ওরা নিজেদের উপরে লাঞ্ছনা ও দুর্দশা ঘটালো, আর তারা আল্লাহ্‌র রোষ টেনে আনল তাই হলো, কারণ তারা আল্লাহ্‌র আয়াতসমূহে অবিশ্বাস করছিল, আর নবীদের অন্যায়ভাবে হত্যা করতে যাচ্ছিল। তাই হলো, কেননা তারা অবাধ্য হয়েছিল ও সীমালঙ্ঘন করেছিল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 62,
            'page_no'       => 10,
            'jaz_no'        => 1,
            'arabic'        => 'إِنَّ الَّذِينَ آمَنُوا وَالَّذِينَ هَادُوا وَالنَّصَارَىٰ وَالصَّابِئِينَ مَنْ آمَنَ بِاللَّهِ وَالْيَوْمِ الْآخِرِ وَعَمِلَ صَالِحًا فَلَهُمْ أَجْرُهُمْ عِندَ رَبِّهِمْ وَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ',
            'english'       => 'Indeed, those who believed and those who were Jews or Christians or Sabeans [before Prophet Muhammad] - those [among them] who believed in Allah and the Last Day and did righteousness - will have their reward with their Lord, and no fear will there be concerning them, nor will they grieve.',
            'bangla'        => 'নিঃসন্দেহ যারা ঈমান এনেছে, আর যারা ইহুদীয় মত পোষণ করে ও খ্রীস্টান ও সাবেঈন -- যারাই আল্লাহ্‌র প্রতি তাঁর একত্বে ও আনুগত্যে ঈমান এনেছে ও আখেরাতের দিনের প্রতি, আর সৎকর্ম করে, তাদের জন্য নিজ নিজ পুরস্কার রয়েছে তাদের প্রভুর দরবারে, আর তাদের উপরে কোনো ভয় নেই, আর তারা নিজেরা অনুতাপও করবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 63,
            'page_no'       => 10,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ أَخَذْنَا مِيثَاقَكُمْ وَرَفَعْنَا فَوْقَكُمُ الطُّورَ خُذُوا مَا آتَيْنَاكُم بِقُوَّةٍ وَاذْكُرُوا مَا فِيهِ لَعَلَّكُمْ تَتَّقُونَ',
            'english'       => 'And [recall] when We took your covenant, [O Children of Israel, to abide by the Torah] and We raised over you the mount, [saying], "Take what We have given you with determination and remember what is in it that perhaps you may become righteous."',
            'bangla'        => 'আর স্মরণ করো! আমরা তোমাদের অঙ্গীকার গ্রহণ করেছিলাম ও তোমাদের উপরে পর্বত উত্তোলন করেছিলাম। “তোমাদের আমরা যা দিয়েছি তা দৃঢ়ভাবে গ্রহণ করো, আর এতে যা আছে তা স্মরণ রাখো, যাতে তোমরা ধর্মপরায়ণতা অবলন্বন করতে পার।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 64,
            'page_no'       => 10,
            'jaz_no'        => 1,
            'arabic'        => 'ثُمَّ تَوَلَّيْتُم مِّن بَعْدِ ذَٰلِكَ ۖ فَلَوْلَا فَضْلُ اللَّهِ عَلَيْكُمْ وَرَحْمَتُهُ لَكُنتُم مِّنَ الْخَاسِرِينَ',
            'english'       => 'Then you turned away after that. And if not for the favor of Allah upon you and His mercy, you would have been among the losers.',
            'bangla'        => 'তারপর তোমরা এর পরেও ফিরে গেলে, কাজেই আল্লাহ্‌র প্রসন্নতা ও তাঁর করুণা যদি তোমাদের উপরে না থাকত তবে তোমরা অবশ্যই হতে ক্ষতিগ্রস্তদের অন্তর্ভুক্ত।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 65,
            'page_no'       => 10,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَقَدْ عَلِمْتُمُ الَّذِينَ اعْتَدَوْا مِنكُمْ فِي السَّبْتِ فَقُلْنَا لَهُمْ كُونُوا قِرَدَةً خَاسِئِينَ',
            'english'       => 'And you had already known about those who transgressed among you concerning the sabbath, and We said to them, "Be apes, despised."',
            'bangla'        => 'তদুপরি তোমাদের মধ্যে যারা সাব্বাথের নিয়ম লঙঘন করেছিল তাদের কথা নিশ্চয়ই জানা আছে, তাই আমরা তাদের বলেছিলাম -- “তোমরা ঘৃণ্য বানর হয়ে যাও।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 66,
            'page_no'       => 10,
            'jaz_no'        => 1,
            'arabic'        => 'فَجَعَلْنَاهَا نَكَالًا لِّمَا بَيْنَ يَدَيْهَا وَمَا خَلْفَهَا وَمَوْعِظَةً لِّلْمُتَّقِينَ',
            'english'       => 'And We made it a deterrent punishment for those who were present and those who succeeded [them] and a lesson for those who fear Allah.',
            'bangla'        => 'এইভাবে আমরা এটিকে একটি দৃষ্টান্ত বানিয়েছিলাম যারা ওদের সমসাময়িক ছিল তাদের জন্য ও যারা ওদের পরবর্তীকালে এসেছিল, আর ধর্মভীরুদের জন্য উপদেশ বিশেষ।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 67,
            'page_no'       => 10,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قَالَ مُوسَىٰ لِقَوْمِهِ إِنَّ اللَّهَ يَأْمُرُكُمْ أَن تَذْبَحُوا بَقَرَةً ۖ قَالُوا أَتَتَّخِذُنَا هُزُوًا ۖ قَالَ أَعُوذُ بِاللَّهِ أَنْ أَكُونَ مِنَ الْجَاهِلِينَ',
            'english'       => 'And [recall] when Moses said to his people, "Indeed, Allah commands you to slaughter a cow." They said, "Do you take us in ridicule?" He said, "I seek refuge in Allah from being among the ignorant."',
            'bangla'        => 'আর স্মরণ করো! মূসা তাঁর লোকদের বললেন -- “নিঃসন্দেহ, আল্লাহ্ তোমাদের হুকুম করেছেন তোমরা যেন একটি বক্‌না-বাছুর যবেহ্ করো।” তারা বললে -- “তুমি কি আমাদের নিয়ে ঠাট্টা করছ?” তিনি বললেন -- “আল্লাহ্‌র কাছে আশ্রয় চাইছি যেন আমি জাহিলদের অন্তর্ভুক্ত না হই।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 68,
            'page_no'       => 10,
            'jaz_no'        => 1,
            'arabic'        => 'قَالُوا ادْعُ لَنَا رَبَّكَ يُبَيِّن لَّنَا مَا هِيَ ۚ قَالَ إِنَّهُ يَقُولُ إِنَّهَا بَقَرَةٌ لَّا فَارِضٌ وَلَا بِكْرٌ عَوَانٌ بَيْنَ ذَٰلِكَ ۖ فَافْعَلُوا مَا تُؤْمَرُونَ',
            'english'       => 'They said, "Call upon your Lord to make clear to us what it is." [Moses] said, "[Allah] says, \'It is a cow which is neither old nor virgin, but median between that,\' so do what you are commanded."',
            'bangla'        => 'তারা বললো -- “তোমার প্রভুর কাছে আমাদের জন্য প্রার্থনা করো যেন তিনি আমাদের পরিস্কার করে দেন সেটি কি রকমের।” তিনি বললেন -- “নিঃসন্দেহ তিনি বলেছেন, সেটি অবশ্যই একটি বক্‌না-বাছুর যেটি বুড়ো নয় ও বাচ্চাও নয়, এদের মাঝামাঝি মধ্য-বয়সী। অতএব তোমাদের যা আদেশ দেয়া হয়েছে তাই করো।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 69,
            'page_no'       => 10,
            'jaz_no'        => 1,
            'arabic'        => 'قَالُوا ادْعُ لَنَا رَبَّكَ يُبَيِّن لَّنَا مَا لَوْنُهَا ۚ قَالَ إِنَّهُ يَقُولُ إِنَّهَا بَقَرَةٌ صَفْرَاءُ فَاقِعٌ لَّوْنُهَا تَسُرُّ النَّاظِرِينَ',
            'english'       => 'They said, "Call upon your Lord to show us what is her color." He said, "He says, \'It is a yellow cow, bright in color - pleasing to the observers.\' "',
            'bangla'        => 'তারা বললো -- “আমাদের জন্য তোমার প্রভুর কাছে প্রার্থনা করো তিনি আমাদের খোলাখুলি বলে দিন তার রঙ কেমন।” তিনি বললেন -- “তিনি অবশ্যই বলেছেন, সেটি নিঃসন্দেহ হলুদ রঙের বাছুর, তার রঙ অতি উজ্জ্বল -- দর্শকদের কাছে মনোরম।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 70,
            'page_no'       => 11,
            'jaz_no'        => 1,
            'arabic'        => 'قَالُوا ادْعُ لَنَا رَبَّكَ يُبَيِّن لَّنَا مَا هِيَ إِنَّ الْبَقَرَ تَشَابَهَ عَلَيْنَا وَإِنَّا إِن شَاءَ اللَّهُ لَمُهْتَدُونَ',
            'english'       => 'They said, "Call upon your Lord to make clear to us what it is. Indeed, [all] cows look alike to us. And indeed we, if Allah wills, will be guided."',
            'bangla'        => 'তারা বললে -- “তোমার প্রভুর কাছে আমাদের জন্য প্রার্থনা করো আমাদের তিনি স্পষ্ট জানিয়ে দিন সেটি কেমন, কারণ সব বাছুর আমাদের কাছে একাকার লাগে, আর আল্লাহ্ যদি ইচ্ছা করেন, আমরা নিশ্চয় ঠিক পথে চালিত হব।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 71,
            'page_no'       => 11,
            'jaz_no'        => 1,
            'arabic'        => 'قَالَ إِنَّهُ يَقُولُ إِنَّهَا بَقَرَةٌ لَّا ذَلُولٌ تُثِيرُ الْأَرْضَ وَلَا تَسْقِي الْحَرْثَ مُسَلَّمَةٌ لَّا شِيَةَ فِيهَا ۚ قَالُوا الْآنَ جِئْتَ بِالْحَقِّ ۚ فَذَبَحُوهَا وَمَا كَادُوا يَفْعَلُونَ',
            'english'       => 'He said, "He says, \'It is a cow neither trained to plow the earth nor to irrigate the field, one free from fault with no spot upon her.\' " They said, "Now you have come with the truth." So they slaughtered her, but they could hardly do it.',
            'bangla'        => 'তিনি বললেন, “নিঃসন্দেহ তিনি বলছেন, সেটি নিশ্চয়ই এমন বাছুর যাকে জোয়ালে জোতা হয় নি জমি চাষ করতে, বা ক্ষেতে পানিও দেয় না, সহি-সালামত, যার মধ্যে কোন খুতঁ নেই।” তারা বললে -- “এবার তুমি পুরোপুরি সত্য নিয়ে এসেছো।” সুতরাং তারা তাকে কুরবানি করল, আর দেখালো না যে তারা করল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 72,
            'page_no'       => 11,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قَتَلْتُمْ نَفْسًا فَادَّارَأْتُمْ فِيهَا ۖ وَاللَّهُ مُخْرِجٌ مَّا كُنتُمْ تَكْتُمُونَ',
            'english'       => 'And [recall] when you slew a man and disputed over it, but Allah was to bring out that which you were concealing.',
            'bangla'        => 'আর স্মরণ করো! তোমরা একজনকে কাতল করতে যাচ্ছিলে, তারপর তোমরা এ ব্যাপারে দোষাদোষি করছিলে। আর আল্লাহ্ প্রকাশ করছিলেন যা তোমরা লুকোতে চাইছিলে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 73,
            'page_no'       => 11,
            'jaz_no'        => 1,
            'arabic'        => 'فَقُلْنَا اضْرِبُوهُ بِبَعْضِهَا ۚ كَذَٰلِكَ يُحْيِي اللَّهُ الْمَوْتَىٰ وَيُرِيكُمْ آيَاتِهِ لَعَلَّكُمْ تَعْقِلُونَ',
            'english'       => 'So, We said, "Strike the slain man with part of it." Thus does Allah bring the dead to life, and He shows you His signs that you might reason.',
            'bangla'        => 'সুতরাং আমরা বললাম -- “তুলনা করো তাঁকে এর কিছু অংশের সাথে।” এইভাবে আল্লাহ্ মৃতবৎকে জীবন দান করেন। আর তিনি তোমাদের দেখাচ্ছেন তাঁর নিদর্শন সমূহ যাতে তোমরা বুঝতে পার।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 74,
            'page_no'       => 11,
            'jaz_no'        => 1,
            'arabic'        => 'ثُمَّ قَسَتْ قُلُوبُكُم مِّن بَعْدِ ذَٰلِكَ فَهِيَ كَالْحِجَارَةِ أَوْ أَشَدُّ قَسْوَةً ۚ وَإِنَّ مِنَ الْحِجَارَةِ لَمَا يَتَفَجَّرُ مِنْهُ الْأَنْهَارُ ۚ وَإِنَّ مِنْهَا لَمَا يَشَّقَّقُ فَيَخْرُجُ مِنْهُ الْمَاءُ ۚ وَإِنَّ مِنْهَا لَمَا يَهْبِطُ مِنْ خَشْيَةِ اللَّهِ ۗ وَمَا اللَّهُ بِغَافِلٍ عَمَّا تَعْمَلُونَ',
            'english'       => 'Then your hearts became hardened after that, being like stones or even harder. For indeed, there are stones from which rivers burst forth, and there are some of them that split open and water comes out, and there are some of them that fall down for fear of Allah. And Allah is not unaware of what you do.',
            'bangla'        => 'তারপর তোমাদের হৃদয় এর পরেও কঠিন হলো, পাথরের মতো হয়ে গেল, বরং আরও কঠিন। আর অবশ্য পাথরের মধ্যে এমনও আছে যার মধ্য থেকে বেরিয়ে আসে ঝরনা। আবার তাদের কিছু যখন চৌচির হয় তখন তা থেকে পানি বেরোয়। আবার তাদের মধ্যে কতক আল্লাহ্‌র ভয়ে ভেঙ্গে পড়ে। আর তোমরা যা করছো আল্লাহ্ সে বিষয়ে অজ্ঞাত নন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 75,
            'page_no'       => 11,
            'jaz_no'        => 1,
            'arabic'        => 'أَفَتَطْمَعُونَ أَن يُؤْمِنُوا لَكُمْ وَقَدْ كَانَ فَرِيقٌ مِّنْهُمْ يَسْمَعُونَ كَلَامَ اللَّهِ ثُمَّ يُحَرِّفُونَهُ مِن بَعْدِ مَا عَقَلُوهُ وَهُمْ يَعْلَمُونَ',
            'english'       => 'Do you covet [the hope, O believers], that they would believe for you while a party of them used to hear the words of Allah and then distort the Torah after they had understood it while they were knowing?',
            'bangla'        => 'এরপর কি তোমরা আশা কর যে তারা তোমাদের প্রতি বিশ্বাস করবে? ইতিপূর্বে তাদের একটি দল আল্লাহ্‌র বাণী শুনত, তারপর তা পাল্টে দিত উহা বুঝবার পরেও, আর তারা জানে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 76,
            'page_no'       => 11,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذَا لَقُوا الَّذِينَ آمَنُوا قَالُوا آمَنَّا وَإِذَا خَلَا بَعْضُهُمْ إِلَىٰ بَعْضٍ قَالُوا أَتُحَدِّثُونَهُم بِمَا فَتَحَ اللَّهُ عَلَيْكُمْ لِيُحَاجُّوكُم بِهِ عِندَ رَبِّكُمْ ۚ أَفَلَا تَعْقِلُونَ',
            'english'       => 'And when they meet those who believe, they say, "We have believed"; but when they are alone with one another, they say, "Do you talk to them about what Allah has revealed to you so they can argue with you about it before your Lord?" Then will you not reason?',
            'bangla'        => 'আর যারা ঈমান এনেছে তাদের সাথে যখন তারা মোলাকাত করে তখন বলে -- “আমরা ঈমান এনেছি।” আর যখন তাদের লোকেরা একে অন্যের সাথে নিরিবিলি হয় তখন বলে -- “আল্লাহ্ তোমাদের কাছে যা প্রকাশ করেছেন তা কি তোমরা ওদের জানিয়ে দিচ্ছ, যাতে ওরা এ-সবের সাহায্যে তোমাদের প্রভুর সামনে তোমাদের সাথে বিতর্ক করে? তোমরা কি তবে বুঝতে পারছ না?”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 77,
            'page_no'       => 12,
            'jaz_no'        => 1,
            'arabic'        => 'أَوَلَا يَعْلَمُونَ أَنَّ اللَّهَ يَعْلَمُ مَا يُسِرُّونَ وَمَا يُعْلِنُونَ',
            'english'       => 'But do they not know that Allah knows what they conceal and what they declare?',
            'bangla'        => 'আর তারা কি জানে না যে নিঃসন্দেহ আল্লাহ্ জানেন যা তারা লুকিয়ে রাখছে ও যা প্রকাশ করছে?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 78,
            'page_no'       => 12,
            'jaz_no'        => 1,
            'arabic'        => 'وَمِنْهُمْ أُمِّيُّونَ لَا يَعْلَمُونَ الْكِتَابَ إِلَّا أَمَانِيَّ وَإِنْ هُمْ إِلَّا يَظُنُّونَ',
            'english'       => 'And among them are unlettered ones who do not know the Scripture except in wishful thinking, but they are only assuming.',
            'bangla'        => 'আর তাদের মধ্যে হচ্ছে নিরক্ষর যারা ধর্মগ্রন্থ সন্বন্ধে উপকথার বেশী জানে না, আর তারা শুধু আন্দাজের উপর চলে!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 79,
            'page_no'       => 12,
            'jaz_no'        => 1,
            'arabic'        => 'فَوَيْلٌ لِّلَّذِينَ يَكْتُبُونَ الْكِتَابَ بِأَيْدِيهِمْ ثُمَّ يَقُولُونَ هَـٰذَا مِنْ عِندِ اللَّهِ لِيَشْتَرُوا بِهِ ثَمَنًا قَلِيلًا ۖ فَوَيْلٌ لَّهُم مِّمَّا كَتَبَتْ أَيْدِيهِمْ وَوَيْلٌ لَّهُم مِّمَّا يَكْسِبُونَ',
            'english'       => 'So woe to those who write the "scripture" with their own hands, then say, "This is from Allah," in order to exchange it for a small price. Woe to them for what their hands have written and woe to them for what they earn.',
            'bangla'        => 'হায়, কি অভাগা তারা যারা নিজ হাতে গ্রন্থ লেখে, তারপর বলে -- “ইহা আল্লাহ্‌র দরবার থেকে” -- যাতে এর জন্য তারা স্বল্পমূল্য কামাতে পারে। অতএব ধিক্ তাদের প্রতি তাদের হাত যা লিখেছে সেজন্য, আর ধিক্ তাদের প্রতি যা তারা কামাই করে সেজন্য!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 80,
            'page_no'       => 12,
            'jaz_no'        => 1,
            'arabic'        => 'وَقَالُوا لَن تَمَسَّنَا النَّارُ إِلَّا أَيَّامًا مَّعْدُودَةً ۚ قُلْ أَتَّخَذْتُمْ عِندَ اللَّهِ عَهْدًا فَلَن يُخْلِفَ اللَّهُ عَهْدَهُ ۖ أَمْ تَقُولُونَ عَلَى اللَّهِ مَا لَا تَعْلَمُونَ',
            'english'       => 'And they say, "Never will the Fire touch us, except for a few days." Say, "Have you taken a covenant with Allah? For Allah will never break His covenant. Or do you say about Allah that which you do not know?"',
            'bangla'        => 'আর তারা বলে -- “আগুন আমাদের গুনতির কয়েকদিন ছাড়া কদাচ স্পর্শ করবে না।” তুমি বলো -- “তোমরা কি আল্লাহ্‌র কাছ থেকে কোনো প্রতি‌শ্রুতি নিয়েছ? তাহলে আল্লাহ্ তাঁর ওয়াদার কখনো খেলাফ করেন না, অথবা তোমরা কি আল্লাহ্ সন্বন্ধে যা জান না তাই বলছ?”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 81,
            'page_no'       => 12,
            'jaz_no'        => 1,
            'arabic'        => 'بَلَىٰ مَن كَسَبَ سَيِّئَةً وَأَحَاطَتْ بِهِ خَطِيئَتُهُ فَأُولَـٰئِكَ أَصْحَابُ النَّارِ ۖ هُمْ فِيهَا خَالِدُونَ',
            'english'       => 'Yes, whoever earns evil and his sin has encompassed him - those are the companions of the Fire; they will abide therein eternally.',
            'bangla'        => 'হাঁ, যে কেউ মন্দ অর্জন করে, আর তার পাপ তাকে ঘেরাও করে ফেলে, এরাই হচ্ছে আগুনের বাসিন্দা, তাতে তারা থাকবে দীর্ঘকাল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 82,
            'page_no'       => 12,
            'jaz_no'        => 1,
            'arabic'        => 'وَالَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ أُولَـٰئِكَ أَصْحَابُ الْجَنَّةِ ۖ هُمْ فِيهَا خَالِدُونَ',
            'english'       => 'But they who believe and do righteous deeds - those are the companions of Paradise; they will abide therein eternally.',
            'bangla'        => 'আর যারা ঈমান এনেছে ও সৎকর্ম করছে, তারাই হচ্ছে বেহেশতের বাসিন্দা, তাতে থাকবে তারা চিরকাল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 83,
            'page_no'       => 12,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ أَخَذْنَا مِيثَاقَ بَنِي إِسْرَائِيلَ لَا تَعْبُدُونَ إِلَّا اللَّهَ وَبِالْوَالِدَيْنِ إِحْسَانًا وَذِي الْقُرْبَىٰ وَالْيَتَامَىٰ وَالْمَسَاكِينِ وَقُولُوا لِلنَّاسِ حُسْنًا وَأَقِيمُوا الصَّلَاةَ وَآتُوا الزَّكَاةَ ثُمَّ تَوَلَّيْتُمْ إِلَّا قَلِيلًا مِّنكُمْ وَأَنتُم مُّعْرِضُونَ',
            'english'       => 'And [recall] when We took the covenant from the Children of Israel, [enjoining upon them], "Do not worship except Allah; and to parents do good and to relatives, orphans, and the needy. And speak to people good [words] and establish prayer and give zakah." Then you turned away, except a few of you, and you were refusing.',
            'bangla'        => 'আর স্মরণ করো! আমরা ইসরাইলের বংশধরদের থেকে চুক্তি গ্রহণ করেছিলাম -- “তোমরা আল্লাহ্ ছাড়া আর কারো উপাসনা করবে না, আর মাতাপিতার প্রতি ভালো ব্যবহার করবে, এবং আ‌ত্মীয়স্বজনদের প্রতি, আর এতিমদের প্রতি, আর মিসকিনদের প্রতি, আর লোকদের সাথে ভালোভাবে কথা বলবে, আর নামায কায়েম করবে ও যাকাত আদায় করবে।” তারপর তোমরা তোমাদের অল্প কয়েকজন ছাড়া ফিরে গেলে, আর তোমরা ফিরে যাবার দলের।'
        ]);
    }
}
