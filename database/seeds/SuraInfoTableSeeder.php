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

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 84,
            'page_no'       => 13,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ أَخَذْنَا مِيثَاقَكُمْ لَا تَسْفِكُونَ دِمَاءَكُمْ وَلَا تُخْرِجُونَ أَنفُسَكُم مِّن دِيَارِكُمْ ثُمَّ أَقْرَرْتُمْ وَأَنتُمْ تَشْهَدُونَ',
            'english'       => 'And [recall] when We took your covenant, [saying], "Do not shed each other\'s blood or evict one another from your homes." Then you acknowledged [this] while you were witnessing.',
            'bangla'        => 'আর স্মরণ করো! আমরা তোমাদের অঙ্গীকার গ্রহণ করেছিলাম -- “তোমরা তোমাদের রক্তপাত করবে না আর তোমাদের লোকদের তোমাদের বাড়িঘর থেকে বের করে দেবে না।” তখন তোমরা প্রতিজ্ঞা করেছিলে, আর তোমারা সাক্ষ্য দিয়েছিলে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 85,
            'page_no'       => 13,
            'jaz_no'        => 1,
            'arabic'        => 'ثُمَّ أَنتُمْ هَـٰؤُلَاءِ تَقْتُلُونَ أَنفُسَكُمْ وَتُخْرِجُونَ فَرِيقًا مِّنكُم مِّن دِيَارِهِمْ تَظَاهَرُونَ عَلَيْهِم بِالْإِثْمِ وَالْعُدْوَانِ وَإِن يَأْتُوكُمْ أُسَارَىٰ تُفَادُوهُمْ وَهُوَ مُحَرَّمٌ عَلَيْكُمْ إِخْرَاجُهُمْ ۚ أَفَتُؤْمِنُونَ بِبَعْضِ الْكِتَابِ وَتَكْفُرُونَ بِبَعْضٍ ۚ فَمَا جَزَاءُ مَن يَفْعَلُ ذَٰلِكَ مِنكُمْ إِلَّا خِزْيٌ فِي الْحَيَاةِ الدُّنْيَا ۖ وَيَوْمَ الْقِيَامَةِ يُرَدُّونَ إِلَىٰ أَشَدِّ الْعَذَابِ ۗ وَمَا اللَّهُ بِغَافِلٍ عَمَّا تَعْمَلُونَ',
            'english'       => 'Then, you are those [same ones who are] killing one another and evicting a party of your people from their homes, cooperating against them in sin and aggression. And if they come to you as captives, you ransom them, although their eviction was forbidden to you. So do you believe in part of the Scripture and disbelieve in part? Then what is the recompense for those who do that among you except disgrace in worldly life; and on the Day of Resurrection they will be sent back to the severest of punishment. And Allah is not unaware of what you do.',
            'bangla'        => 'তারপর তোমরাই সেই যারা তোমাদের নিজেদের মধ্যে খুন-খারাবি করো, আর তোমাদেরই এক দলকে তাদের বাড়িঘর থেকে তোমরা তাড়িয়ে দাও তাদের বিরুদ্ধে পাপ ও নিষ্ঠুরতায় পৃষ্ঠপোষকতা ক’রে। অথচ যদি তারা তোমাদের কাছে বন্দীরূপে আসে তবে তাদের মুক্তিপণ দাও, যদিও তাদের তাড়িয়ে দেওয়াটা তোমাদের উপরে অবৈধ ছিল। তাহলে তোমরা কি ধর্মগ্রন্থের অংশবিশেষে বিশ্বাস কর ও অন্য অংশে অবিশ্বাস পোষণ কর? অতএব তোমাদের মধ্যের যারা এরকম করে তাদের ইহজীবনে লাঞ্ছনা ছাড়া আর কী পুরস্কার আছে? আর কিয়ামতের দিনে তাদের ফেরত পাঠানো হবে কঠোরতম শাস্তিতে। আর তোমরা যা করছো আল্লাহ্ সে-বিষয়ে অজ্ঞাত নন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 86,
            'page_no'       => 13,
            'jaz_no'        => 1,
            'arabic'        => 'أُولَـٰئِكَ الَّذِينَ اشْتَرَوُا الْحَيَاةَ الدُّنْيَا بِالْآخِرَةِ ۖ فَلَا يُخَفَّفُ عَنْهُمُ الْعَذَابُ وَلَا هُمْ يُنصَرُونَ',
            'english'       => 'Those are the ones who have bought the life of this world [in exchange] for the Hereafter, so the punishment will not be lightened for them, nor will they be aided.',
            'bangla'        => 'এরাই তারা যারা আখেরাতের বদলে ইহজীবন খরিদ করেছে। তাই তাদের উপর থেকে শাস্তি লাঘব করা হবে না, আর তাদের সাহায্যও দেয়া হবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 87,
            'page_no'       => 13,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَقَدْ آتَيْنَا مُوسَى الْكِتَابَ وَقَفَّيْنَا مِن بَعْدِهِ بِالرُّسُلِ ۖ وَآتَيْنَا عِيسَى ابْنَ مَرْيَمَ الْبَيِّنَاتِ وَأَيَّدْنَاهُ بِرُوحِ الْقُدُسِ ۗ أَفَكُلَّمَا جَاءَكُمْ رَسُولٌ بِمَا لَا تَهْوَىٰ أَنفُسُكُمُ اسْتَكْبَرْتُمْ فَفَرِيقًا كَذَّبْتُمْ وَفَرِيقًا تَقْتُلُونَ',
            'english'       => 'And We did certainly give Moses the Torah and followed up after him with messengers. And We gave Jesus, the son of Mary, clear proofs and supported him with the Pure Spirit. But is it [not] that every time a messenger came to you, [O Children of Israel], with what your souls did not desire, you were arrogant? And a party [of messengers] you denied and another party you killed.',
            'bangla'        => 'আর অবশ্যই আমরা মূসাকে ধর্মগ্রন্থ দিয়েছিলাম, আর তাঁর পরে পর্যায়ক্রমে বহু রসূল পাঠিয়েছিলাম, আর আমরা মরিয়মের পুত্র ঈসাকে দিয়েছিলাম স্পষ্ট-প্রমাণাবলী, আর আমরা তাঁকে বলীয়ান করি রূহুল ক্কুদুস দিয়ে। তাহলে কি যখনই তোমাদের কাছে একজন রসূল আসেন এমন কিছু নিয়ে যা তোমাদের মন চায় না, তখনই তোমরা অহংকার দেখাও? গতিকে, কাউকে তোমরা মিথ্যারোপ করো ও কাউকে কাতল করতে যাও।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 88,
            'page_no'       => 13,
            'jaz_no'        => 1,
            'arabic'        => 'وَقَالُوا قُلُوبُنَا غُلْفٌ ۚ بَل لَّعَنَهُمُ اللَّهُ بِكُفْرِهِمْ فَقَلِيلًا مَّا يُؤْمِنُونَ',
            'english'       => 'And they said, "Our hearts are wrapped." But, [in fact], Allah has cursed them for their disbelief, so little is it that they believe.',
            'bangla'        => 'আর তারা বলে -- “আমাদের হৃদয় হলো গেলাফ!” না, আল্লাহ্ তাদের বঞ্চিত করেছেন তাদের অবিশ্বাসের জন্য। তাই যৎসামান্যই যা তারা বিশ্বাস করে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 89,
            'page_no'       => 14,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَمَّا جَاءَهُمْ كِتَابٌ مِّنْ عِندِ اللَّهِ مُصَدِّقٌ لِّمَا مَعَهُمْ وَكَانُوا مِن قَبْلُ يَسْتَفْتِحُونَ عَلَى الَّذِينَ كَفَرُوا فَلَمَّا جَاءَهُم مَّا عَرَفُوا كَفَرُوا بِهِ ۚ فَلَعْنَةُ اللَّهِ عَلَى الْكَافِرِينَ',
            'english'       => 'And when there came to them a Book from Allah confirming that which was with them - although before they used to pray for victory against those who disbelieved - but [then] when there came to them that which they recognized, they disbelieved in it; so the curse of Allah will be upon the disbelievers.',
            'bangla'        => 'আর যখন তাদের কাছে আল্লাহ্‌র তরফ থেকে একখানা ধর্মগ্রন্থ এল যাতে সমর্থন রয়েছে যা তাদের কাছে আছে -- যদিও ইতিপূর্বে তারা প্রার্থনা করতো যারা অবিশ্বাস পোষণ করে তাদের উপরে বিজয়ী হবার জন্যে, -- কিন্তু যখন তাদের কাছে এলেন যাঁকে তারা চিনতে পারল তারা তাঁকে অবিশ্বাস করে বসলো। সুতরাং আল্লাহ্‌র নারাজি অবিশ্বাসীদের উপরে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 90,
            'page_no'       => 14,
            'jaz_no'        => 1,
            'arabic'        => 'بِئْسَمَا اشْتَرَوْا بِهِ أَنفُسَهُمْ أَن يَكْفُرُوا بِمَا أَنزَلَ اللَّهُ بَغْيًا أَن يُنَزِّلَ اللَّهُ مِن فَضْلِهِ عَلَىٰ مَن يَشَاءُ مِنْ عِبَادِهِ ۖ فَبَاءُوا بِغَضَبٍ عَلَىٰ غَضَبٍ ۚ وَلِلْكَافِرِينَ عَذَابٌ مُّهِينٌ',
            'english'       => 'How wretched is that for which they sold themselves - that they would disbelieve in what Allah has revealed through [their] outrage that Allah would send down His favor upon whom He wills from among His servants. So they returned having [earned] wrath upon wrath. And for the disbelievers is a humiliating punishment.',
            'bangla'        => 'গর্হিত তা যা দিয়ে তারা নিজেদের আ‌ত্মা বিনিময় করেছে যে জন্য আল্লাহ্ যা অবতারণ করেছেন তা তারা অবিশ্বাস করে বিদ্বেষের বশে -- যে আল্লাহ্ তাঁর কৃপাবশতঃ উহা অবতীর্ণ করবেন তাঁর দাসদের মধ্যে যাকে ইচ্ছা করেন তার কাছে! তাই তারা রোষের উপর রোষ টেনে আনলো। আর অবিশ্বাসীদের জন্য রয়েছে লাঞ্ছনাদায়ক শাস্তি।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 91,
            'page_no'       => 14,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذَا قِيلَ لَهُمْ آمِنُوا بِمَا أَنزَلَ اللَّهُ قَالُوا نُؤْمِنُ بِمَا أُنزِلَ عَلَيْنَا وَيَكْفُرُونَ بِمَا وَرَاءَهُ وَهُوَ الْحَقُّ مُصَدِّقًا لِّمَا مَعَهُمْ ۗ قُلْ فَلِمَ تَقْتُلُونَ أَنبِيَاءَ اللَّهِ مِن قَبْلُ إِن كُنتُم مُّؤْمِنِينَ',
            'english'       => 'And when it is said to them, "Believe in what Allah has revealed," they say, "We believe [only] in what was revealed to us." And they disbelieve in what came after it, while it is the truth confirming that which is with them. Say, "Then why did you kill the prophets of Allah before, if you are [indeed] believers?"',
            'bangla'        => 'আর যখন তাদের বলা হয় -- “ঈমান আনো আল্লাহ্ যা নাযিল করেছেন তাতে,” তারা বলে -- “আমরা বিশ্বাস করি যা আমাদের কাছে নাযিল হয়েছিল।” অথচ তারা অবিশ্বাস করে যা তার পরে এসেছে, যদিও উহা হলো ধ্রুব সত্য, সমর্থন করছে যা তাদের কাছে রয়েছে তার। বলো -- “তাহলে তোমরা কেন আল্লাহ্‌র নবীদের এর আগে হত্যা করতে যাচ্ছিলে? যদি তোমরা বিশ্বাসী হয়ে থাকো।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 92,
            'page_no'       => 14,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَقَدْ جَاءَكُم مُّوسَىٰ بِالْبَيِّنَاتِ ثُمَّ اتَّخَذْتُمُ الْعِجْلَ مِن بَعْدِهِ وَأَنتُمْ ظَالِمُونَ',
            'english'       => 'And Moses had certainly brought you clear proofs. Then you took the calf [in worship] after that, while you were wrongdoers.',
            'bangla'        => 'আর নিশ্চয়ই মূসা তোমাদের কাছে এসেছিলেন স্পষ্ট প্রমাণ নিয়ে, কিন্তু তোমরা বাছুরকে গ্রহণ করলে তাঁর, আর তোমরা হলে অন্যায়কারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 93,
            'page_no'       => 14,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ أَخَذْنَا مِيثَاقَكُمْ وَرَفَعْنَا فَوْقَكُمُ الطُّورَ خُذُوا مَا آتَيْنَاكُم بِقُوَّةٍ وَاسْمَعُوا ۖ قَالُوا سَمِعْنَا وَعَصَيْنَا وَأُشْرِبُوا فِي قُلُوبِهِمُ الْعِجْلَ بِكُفْرِهِمْ ۚ قُلْ بِئْسَمَا يَأْمُرُكُم بِهِ إِيمَانُكُمْ إِن كُنتُم مُّؤْمِنِينَ',
            'english'       => 'And [recall] when We took your covenant and raised over you the mount, [saying], "Take what We have given you with determination and listen." They said [instead], "We hear and disobey." And their hearts absorbed [the worship of] the calf because of their disbelief. Say, "How wretched is that which your faith enjoins upon you, if you should be believers."',
            'bangla'        => 'আর স্মরণ করো! আমরা তোমাদের অঙ্গীকার গ্রহণ করেছিলাম ও তোমাদের উপরে পর্বত খাড়া করেছিলাম। -- “তোমাদের আমরা যা দিয়েছি তা শক্ত করে পাকড়ে ধরো, আর শুনো।” তারা বলল -- “আমরা শুনলাম আর অমান্য করলাম!” আর তাদের হৃদয়ের ভেতরে পান করানো হয়েছে বাছুর তাদের অস্বীকার করার দরুন। বলো -- “তোমাদের ধর্মবিশ্বাস তোমাদের যা নির্দেশ দিচ্ছে তা দূষণীয়, যদি তোমরা ঈমানদার হও।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 94,
            'page_no'       => 15,
            'jaz_no'        => 1,
            'arabic'        => 'قُلْ إِن كَانَتْ لَكُمُ الدَّارُ الْآخِرَةُ عِندَ اللَّهِ خَالِصَةً مِّن دُونِ النَّاسِ فَتَمَنَّوُا الْمَوْتَ إِن كُنتُمْ صَادِقِينَ',
            'english'       => 'Say, [O Muhammad], "If the home of the Hereafter with Allah is for you alone and not the [other] people, then wish for death, if you should be truthful.',
            'bangla'        => 'বলো -- “যদি আল্লাহ্‌র আখেরাতের ঘর অপর লোককে বাদ দিয়ে খাস ক’রে তোমাদের জন্য হয়ে থাকে তবে মৃত্যু কামনা করো, যদি তোমরা সত্যবাদী হও।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 95,
            'page_no'       => 15,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَن يَتَمَنَّوْهُ أَبَدًا بِمَا قَدَّمَتْ أَيْدِيهِمْ ۗ وَاللَّهُ عَلِيمٌ بِالظَّالِمِينَ',
            'english'       => 'But they will never wish for it, ever, because of what their hands have put forth. And Allah is Knowing of the wrongdoers.',
            'bangla'        => 'কিন্তু তারা কখনো তা চাইবে না তাদের দুই হাত যা পাঠিয়েছে। আর আল্লাহ্ অন্যায়কারীদের সম্পর্কে সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 96,
            'page_no'       => 15,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَتَجِدَنَّهُمْ أَحْرَصَ النَّاسِ عَلَىٰ حَيَاةٍ وَمِنَ الَّذِينَ أَشْرَكُوا ۚ يَوَدُّ أَحَدُهُمْ لَوْ يُعَمَّرُ أَلْفَ سَنَةٍ وَمَا هُوَ بِمُزَحْزِحِهِ مِنَ الْعَذَابِ أَن يُعَمَّرَ ۗ وَاللَّهُ بَصِيرٌ بِمَا يَعْمَلُونَ',
            'english'       => 'And you will surely find them the most greedy of people for life - [even] more than those who associate others with Allah. One of them wishes that he could be granted life a thousand years, but it would not remove him in the least from the [coming] punishment that he should be granted life. And Allah is Seeing of what they do.',
            'bangla'        => 'আর তুমি তাদের পাবে জীবন সন্বন্ধে সবচাইতে লোভী মানুষ, যারা শরিক করে তাদের চাইতেও। তাদের এক একজন কামনা করে তাকে যেন হাজার বছরের পরমায়ু দেয়া হয়। কিন্তু তাকে দীর্ঘজীবন দেয়া হলেও শাস্তি থেকে সে স্থানাস্তরিত হবে না। আর তারা যা করছে আল্লাহ্ তার দর্শক।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 97,
            'page_no'       => 15,
            'jaz_no'        => 1,
            'arabic'        => 'قُلْ مَن كَانَ عَدُوًّا لِّجِبْرِيلَ فَإِنَّهُ نَزَّلَهُ عَلَىٰ قَلْبِكَ بِإِذْنِ اللَّهِ مُصَدِّقًا لِّمَا بَيْنَ يَدَيْهِ وَهُدًى وَبُشْرَىٰ لِلْمُؤْمِنِينَ',
            'english'       => 'Say, "Whoever is an enemy to Gabriel - it is [none but] he who has brought the Qur\'an down upon your heart, [O Muhammad], by permission of Allah, confirming that which was before it and as guidance and good tidings for the believers."',
            'bangla'        => 'বলো -- “যে কেউ জিব্রীলের শত্রু” -- কারণ নিঃসন্দেহ সে-ই আল্লাহ্‌র আদেশে উহা তোমার হৃদয়ে অবতীর্ণ করেছে, এর আগে যা এসেছিল তার সত্য-সমর্থনরূপে, এবং মুমিনদের জন্য পথপ্রদর্শক ও সুসংবাদদাতারূপে, --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 98,
            'page_no'       => 15,
            'jaz_no'        => 1,
            'arabic'        => 'مَن كَانَ عَدُوًّا لِّلَّهِ وَمَلَائِكَتِهِ وَرُسُلِهِ وَجِبْرِيلَ وَمِيكَالَ فَإِنَّ اللَّهَ عَدُوٌّ لِّلْكَافِرِينَ',
            'english'       => 'Whoever is an enemy to Allah and His angels and His messengers and Gabriel and Michael - then indeed, Allah is an enemy to the disbelievers.',
            'bangla'        => '“যে কেউ আল্লাহ্‌র ও তাঁর ফিরিশ্‌তাদের ও তাঁর রসূলদের ও জিব্রীলের ও মিকালের শত্রু, নিঃসন্দেহ আল্লাহ্ তখন অবিশ্বাসীদের শত্রু।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 99,
            'page_no'       => 15,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَقَدْ أَنزَلْنَا إِلَيْكَ آيَاتٍ بَيِّنَاتٍ ۖ وَمَا يَكْفُرُ بِهَا إِلَّا الْفَاسِقُونَ',
            'english'       => 'And We have certainly revealed to you verses [which are] clear proofs, and no one would deny them except the defiantly disobedient.',
            'bangla'        => 'আর নিশ্চয়ই আমরা তোমার কাছে নাযিল করেছি সুস্পষ্ট আয়াত -- সমূহ, আর কেউ এতে অবিশ্বাস করে না দুর্বৃত্তরা ছাড়া।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 100,
            'page_no'       => 15,
            'jaz_no'        => 1,
            'arabic'        => 'أَوَكُلَّمَا عَاهَدُوا عَهْدًا نَّبَذَهُ فَرِيقٌ مِّنْهُم ۚ بَلْ أَكْثَرُهُمْ لَا يُؤْمِنُونَ',
            'english'       => 'Is it not [true] that every time they took a covenant a party of them threw it away? But, [in fact], most of them do not believe.',
            'bangla'        => 'কি ব্যাপার! যখনই তারা কোনো ওয়াদাতে অঙ্গীকার করেছে, তাদের একদল তা প্রত্যাখ্যান করেছে? না, তাদের অধিকাংশই বিশ্বাস করে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 101,
            'page_no'       => 15,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَمَّا جَاءَهُمْ رَسُولٌ مِّنْ عِندِ اللَّهِ مُصَدِّقٌ لِّمَا مَعَهُمْ نَبَذَ فَرِيقٌ مِّنَ الَّذِينَ أُوتُوا الْكِتَابَ كِتَابَ اللَّهِ وَرَاءَ ظُهُورِهِمْ كَأَنَّهُمْ لَا يَعْلَمُونَ',
            'english'       => 'And when a messenger from Allah came to them confirming that which was with them, a party of those who had been given the Scripture threw the Scripture of Allah behind their backs as if they did not know [what it contained].',
            'bangla'        => 'আর যখনই তাদের কাছে আল্লাহ্‌র তরফ থেকে কোনো রসূল আসেন তাদের কাছে যা আছে তার সমর্থন ক’রে, যাদের গ্রন্থ দেয়া হয়েছিল তাদের একদল আল্লাহ্‌র গ্রন্থকে তাদের পশ্চাদ্দেশে ফেলে রাখে, যেন তারা জানে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 102,
            'page_no'       => 16,
            'jaz_no'        => 1,
            'arabic'        => 'وَاتَّبَعُوا مَا تَتْلُو الشَّيَاطِينُ عَلَىٰ مُلْكِ سُلَيْمَانَ ۖ وَمَا كَفَرَ سُلَيْمَانُ وَلَـٰكِنَّ الشَّيَاطِينَ كَفَرُوا يُعَلِّمُونَ النَّاسَ السِّحْرَ وَمَا أُنزِلَ عَلَى الْمَلَكَيْنِ بِبَابِلَ هَارُوتَ وَمَارُوتَ ۚ وَمَا يُعَلِّمَانِ مِنْ أَحَدٍ حَتَّىٰ يَقُولَا إِنَّمَا نَحْنُ فِتْنَةٌ فَلَا تَكْفُرْ ۖ فَيَتَعَلَّمُونَ مِنْهُمَا مَا يُفَرِّقُونَ بِهِ بَيْنَ الْمَرْءِ وَزَوْجِهِ ۚ وَمَا هُم بِضَارِّينَ بِهِ مِنْ أَحَدٍ إِلَّا بِإِذْنِ اللَّهِ ۚ وَيَتَعَلَّمُونَ مَا يَضُرُّهُمْ وَلَا يَنفَعُهُمْ ۚ وَلَقَدْ عَلِمُوا لَمَنِ اشْتَرَاهُ مَا لَهُ فِي الْآخِرَةِ مِنْ خَلَاقٍ ۚ وَلَبِئْسَ مَا شَرَوْا بِهِ أَنفُسَهُمْ ۚ لَوْ كَانُوا يَعْلَمُونَ',
            'english'       => 'And they followed [instead] what the devils had recited during the reign of Solomon. It was not Solomon who disbelieved, but the devils disbelieved, teaching people magic and that which was revealed to the two angels at Babylon, Harut and Marut. But the two angels do not teach anyone unless they say, "We are a trial, so do not disbelieve [by practicing magic]." And [yet] they learn from them that by which they cause separation between a man and his wife. But they do not harm anyone through it except by permission of Allah. And the people learn what harms them and does not benefit them. But the Children of Israel certainly knew that whoever purchased the magic would not have in the Hereafter any share. And wretched is that for which they sold themselves, if they only knew.',
            'bangla'        => 'আর তারা তার অনুসরণ করে যা শয়তানরা সুলাইমানের রাজত্বে চালু করেছিল, আর সুলাইমান অবিশ্বাস পোষণ করেন নি, বরং শয়তান অবিশ্বাস করেছিল, তারা লোকজনকে জাদুবিদ্যা শেখাতো, আর তা বাবেলে হারূত ও মারূত এই দুই ফিরিশ্‌তার কাছে নাযিল হয় নি, আর এই দুইজন কাউকে শেখায়ও নি যাতে তাদের বলতে হয় -- “আমরা এক পরীক্ষা মাত্র, অতএব অবিশ্বাস করো না।” সুতরাং এই দুইয়ের থেকে তারা শিখেছে যার দ্বারা স্বামী ও তার স্ত্রীর মধ্যে বিচ্ছেদ ঘটে। কিন্তু তারা এর দ্বারা কারো ক্ষতি করতে পারে না আল্লাহ্‌র অনুমতি ব্যতীত। আর তারা তাই শেখে যা তাদের ক্ষতিসাধন করে, এবং তাদের উপকার করে না। আর অবশ্যই তারা জানে যে এটা যে কিনে নেয় তার জন্য পরকালে কোনো লাভের অংশ থাকবে না। আর আফসোস, এটা মন্দ যার বিনিময়ে তারা নিজেদের আ‌ত্মা বিক্রয় করেছে, -- যদি তারা জানতো!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 103,
            'page_no'       => 16,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَوْ أَنَّهُمْ آمَنُوا وَاتَّقَوْا لَمَثُوبَةٌ مِّنْ عِندِ اللَّهِ خَيْرٌ ۖ لَّوْ كَانُوا يَعْلَمُونَ',
            'english'       => 'And if they had believed and feared Allah, then the reward from Allah would have been [far] better, if they only knew.',
            'bangla'        => 'আর যদি তারা ঈমান আনতো ও ধর্মভীরুতা অবলন্বন করতো তাহলে আল্লাহ্‌র কাছ থেকে পুরস্কার নিশ্চয়ই বহু ভালো হতো, -- যদি তারা জানতো!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 104,
            'page_no'       => 16,
            'jaz_no'        => 1,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا لَا تَقُولُوا رَاعِنَا وَقُولُوا انظُرْنَا وَاسْمَعُوا ۗ وَلِلْكَافِرِينَ عَذَابٌ أَلِيمٌ',
            'english'       => 'O you who have believed, say not [to Allah \'s Messenger], "Ra\'ina" but say, "Unthurna" and listen. And for the disbelievers is a painful punishment.',
            'bangla'        => 'ওহে যারা ঈমান এনেছো! তোমরা বলো না “রা-\'ইনা-”, বরং বলো “উনযুরনা-”, আর শুনুন। আর অবিশ্বাসীদের জন্য রয়েছে মর্মন্তদ শাস্তি।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 105,
            'page_no'       => 16,
            'jaz_no'        => 1,
            'arabic'        => 'مَّا يَوَدُّ الَّذِينَ كَفَرُوا مِنْ أَهْلِ الْكِتَابِ وَلَا الْمُشْرِكِينَ أَن يُنَزَّلَ عَلَيْكُم مِّنْ خَيْرٍ مِّن رَّبِّكُمْ ۗ وَاللَّهُ يَخْتَصُّ بِرَحْمَتِهِ مَن يَشَاءُ ۚ وَاللَّهُ ذُو الْفَضْلِ الْعَظِيمِ',
            'english'       => 'Neither those who disbelieve from the People of the Scripture nor the polytheists wish that any good should be sent down to you from your Lord. But Allah selects for His mercy whom He wills, and Allah is the possessor of great bounty.',
            'bangla'        => 'গ্রন্থপ্রাপ্তদের মধ্যে যারা অবিশ্বাস পোষণ করে তারা এবং মুশরিকরা চায় না যে তোমাদের প্রভুর কাছ থেকে কোনো কল্যাণ তোমাদের প্রতি নাযিল হোক। কিন্তু আল্লাহ্ তাঁর করুণার জন্য যাকে ইচ্ছা করেন মনোনীত করেন। আর আল্লাহ্ অপার কল্যাণের অধিকারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 106,
            'page_no'       => 17,
            'jaz_no'        => 1,
            'arabic'        => 'مَا نَنسَخْ مِنْ آيَةٍ أَوْ نُنسِهَا نَأْتِ بِخَيْرٍ مِّنْهَا أَوْ مِثْلِهَا ۗ أَلَمْ تَعْلَمْ أَنَّ اللَّهَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
            'english'       => 'We do not abrogate a verse or cause it to be forgotten except that We bring forth [one] better than it or similar to it. Do you not know that Allah is over all things competent?',
            'bangla'        => 'যে-সব আয়াত আমরা মনসুখ করি অথবা উহা ভুলিয়ে দিই, আমরা তার চাইতে ভালো অথবা তার অনুরূপ নিয়ে আসি। তুমি কি জান না যে আল্লাহ্ নিঃসন্দেহ সব-কিছুর উপরে সর্বশক্তিমান?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 107,
            'page_no'       => 17,
            'jaz_no'        => 1,
            'arabic'        => 'أَلَمْ تَعْلَمْ أَنَّ اللَّهَ لَهُ مُلْكُ السَّمَاوَاتِ وَالْأَرْضِ ۗ وَمَا لَكُم مِّن دُونِ اللَّهِ مِن وَلِيٍّ وَلَا نَصِيرٍ',
            'english'       => 'Do you not know that to Allah belongs the dominion of the heavens and the earth and [that] you have not besides Allah any protector or any helper?',
            'bangla'        => 'তুমি কি জানো না নিঃসন্দেহ আল্লাহ্‌, -- মহাকাশমন্ডলের ও পৃথিবীর রাজত্ব তাঁরই। আর তোমাদের জন্য আল্লাহ্ ছাড়া কোনো মুরব্বী অথবা সাহায্যকারী নেই।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 108,
            'page_no'       => 17,
            'jaz_no'        => 1,
            'arabic'        => 'أَمْ تُرِيدُونَ أَن تَسْأَلُوا رَسُولَكُمْ كَمَا سُئِلَ مُوسَىٰ مِن قَبْلُ ۗ وَمَن يَتَبَدَّلِ الْكُفْرَ بِالْإِيمَانِ فَقَدْ ضَلَّ سَوَاءَ السَّبِيلِ',
            'english'       => 'Or do you intend to ask your Messenger as Moses was asked before? And whoever exchanges faith for disbelief has certainly strayed from the soundness of the way.',
            'bangla'        => 'তোমরা কি তোমাদের রসূলকে প্রশ্ন করতে চাও যেমন মূসাকে এর আগে প্রশ্ন করা হয়েছিল? আর যে বিশ্বাসের জায়গায় অবিশ্বাস বদলে নেয় সে-ই নিশ্চয়ই সরল পথের দিশা হারায়।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 109,
            'page_no'       => 17,
            'jaz_no'        => 1,
            'arabic'        => 'وَدَّ كَثِيرٌ مِّنْ أَهْلِ الْكِتَابِ لَوْ يَرُدُّونَكُم مِّن بَعْدِ إِيمَانِكُمْ كُفَّارًا حَسَدًا مِّنْ عِندِ أَنفُسِهِم مِّن بَعْدِ مَا تَبَيَّنَ لَهُمُ الْحَقُّ ۖ فَاعْفُوا وَاصْفَحُوا حَتَّىٰ يَأْتِيَ اللَّهُ بِأَمْرِهِ ۗ إِنَّ اللَّهَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
            'english'       => 'Many of the People of the Scripture wish they could turn you back to disbelief after you have believed, out of envy from themselves [even] after the truth has become clear to them. So pardon and overlook until Allah delivers His command. Indeed, Allah is over all things competent.',
            'bangla'        => 'গ্রন্থপ্রাপ্ত লোকের অনেকে কামনা করে যে তোমাদের ঈমান আনার পরে তোমাদের অবিশ্বাসে ফিরিয়ে নিতে, তাদের তরফ থেকে বিদ্বেষের ফলে তাদের কাছে সত্য পরিস্কার হবার পরেও। তাই ক্ষমা করো ও উপেক্ষা করো যে পর্যন্ত না আল্লাহ্ তাঁর অনুশাসন নিয়ে আসেন। নিঃসন্দেহ আল্লাহ্ সবকিছুর উপরে সর্বশক্তিমান।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 110,
            'page_no'       => 17,
            'jaz_no'        => 1,
            'arabic'        => 'وَأَقِيمُوا الصَّلَاةَ وَآتُوا الزَّكَاةَ ۚ وَمَا تُقَدِّمُوا لِأَنفُسِكُم مِّنْ خَيْرٍ تَجِدُوهُ عِندَ اللَّهِ ۗ إِنَّ اللَّهَ بِمَا تَعْمَلُونَ بَصِيرٌ',
            'english'       => 'And establish prayer and give zakah, and whatever good you put forward for yourselves - you will find it with Allah. Indeed, Allah of what you do, is Seeing.',
            'bangla'        => 'আর নামায কায়েম করো ও যাকাত আদায় করো। আর তোমাদের আ‌ত্মার জন্য যা কিছু কল্যাণ আগবাড়াও তা আল্লাহ্‌র দরবারে পাবে। নিশ্চয়ই তোমরা যা করছো আল্লাহ্ তার দর্শক।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 111,
            'page_no'       => 17,
            'jaz_no'        => 1,
            'arabic'        => 'وَقَالُوا لَن يَدْخُلَ الْجَنَّةَ إِلَّا مَن كَانَ هُودًا أَوْ نَصَارَىٰ ۗ تِلْكَ أَمَانِيُّهُمْ ۗ قُلْ هَاتُوا بُرْهَانَكُمْ إِن كُنتُمْ صَادِقِينَ',
            'english'       => 'And they say, "None will enter Paradise except one who is a Jew or a Christian." That is [merely] their wishful thinking, Say, "Produce your proof, if you should be truthful."',
            'bangla'        => 'আর তারা বলে -- “যে ইহুদী বা খ্রীষ্টান সে ছাড়া কেউ কখনও বেহেশতে দাখিল হতে পারবে না।” এসব তাদের বৃথা আকাঙ্খা। বলো -- “তোমাদের প্রমাণ নিয়ে এসো, যদি তোমরা সত্যবাদী হও।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 112,
            'page_no'       => 17,
            'jaz_no'        => 1,
            'arabic'        => 'بَلَىٰ مَنْ أَسْلَمَ وَجْهَهُ لِلَّهِ وَهُوَ مُحْسِنٌ فَلَهُ أَجْرُهُ عِندَ رَبِّهِ وَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ',
            'english'       => 'Yes [on the contrary], whoever submits his face in Islam to Allah while being a doer of good will have his reward with his Lord. And no fear will there be concerning them, nor will they grieve.',
            'bangla'        => 'না, যে কেউ আল্লাহ্‌র তরফে নিজের মুখ পূর্ণ-সমর্পণ করেছে ও সে সৎকর্মী, তার জন্য তার পুরস্কার আছে তার প্রভুর দরবারে, আর তাদের উপরে কোনো ভয় নেই, আর তারা অনুতাপও করবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 113,
            'page_no'       => 18,
            'jaz_no'        => 1,
            'arabic'        => 'وَقَالَتِ الْيَهُودُ لَيْسَتِ النَّصَارَىٰ عَلَىٰ شَيْءٍ وَقَالَتِ النَّصَارَىٰ لَيْسَتِ الْيَهُودُ عَلَىٰ شَيْءٍ وَهُمْ يَتْلُونَ الْكِتَابَ ۗ كَذَٰلِكَ قَالَ الَّذِينَ لَا يَعْلَمُونَ مِثْلَ قَوْلِهِمْ ۚ فَاللَّهُ يَحْكُمُ بَيْنَهُمْ يَوْمَ الْقِيَامَةِ فِيمَا كَانُوا فِيهِ يَخْتَلِفُونَ',
            'english'       => 'The Jews say "The Christians have nothing [true] to stand on," and the Christians say, "The Jews have nothing to stand on," although they [both] recite the Scripture. Thus the polytheists speak the same as their words. But Allah will judge between them on the Day of Resurrection concerning that over which they used to differ.',
            'bangla'        => 'আর ইহুদীরা বলে -- “খ্রীষ্টানরা কিছুরই উপর নয়”, আর খ্রীষ্টানরা বলে -- “ইহুদীরা কিছুরই উপর নয়।” অথচ তারা সবাই গ্রন্থ পড়ে। এমনিভাবে তাদের কথার মতো কথা বলে এরা যারা জানে না। তাই আল্লাহ্ কিয়ামতের দিনে তাদের মধ্যে রায় দেবেন যে বিষয়ে তারা মতবিরোধ করতো।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 114,
            'page_no'       => 18,
            'jaz_no'        => 1,
            'arabic'        => 'وَمَنْ أَظْلَمُ مِمَّن مَّنَعَ مَسَاجِدَ اللَّهِ أَن يُذْكَرَ فِيهَا اسْمُهُ وَسَعَىٰ فِي خَرَابِهَا ۚ أُولَـٰئِكَ مَا كَانَ لَهُمْ أَن يَدْخُلُوهَا إِلَّا خَائِفِينَ ۚ لَهُمْ فِي الدُّنْيَا خِزْيٌ وَلَهُمْ فِي الْآخِرَةِ عَذَابٌ عَظِيمٌ',
            'english'       => 'And who are more unjust than those who prevent the name of Allah from being mentioned in His mosques and strive toward their destruction. It is not for them to enter them except in fear. For them in this world is disgrace, and they will have in the Hereafter a great punishment.',
            'bangla'        => 'আর তার চাইতে কে বেশী অন্যায়কারী যে আল্লাহ্‌র মসজিদসমূহে বাধা দেয় এইজন্য যে সে-সবে তাঁর নাম স্মরণ করা হবে, আর চেষ্টা করে সে-সবের অনিষ্ট সাধনে? এদের ক্ষেত্রে, তাদের জন্য নয় যে তারা এ-সবে দাখিল হয় ভয়াতুর না হয়ে। তাদের জন্য এই দুনিয়াতে আছে অপমান, আর পরকালে তাদের জন্য কঠোর শাস্তি।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 115,
            'page_no'       => 18,
            'jaz_no'        => 1,
            'arabic'        => 'وَلِلَّهِ الْمَشْرِقُ وَالْمَغْرِبُ ۚ فَأَيْنَمَا تُوَلُّوا فَثَمَّ وَجْهُ اللَّهِ ۚ إِنَّ اللَّهَ وَاسِعٌ عَلِيمٌ',
            'english'       => 'And to Allah belongs the east and the west. So wherever you [might] turn, there is the Face of Allah. Indeed, Allah is all-Encompassing and Knowing.',
            'bangla'        => 'আর আল্লাহ্‌রই পূর্বাঞ্চল ও পশ্চিমাঞ্চল। অতএব যেদিকে তোমরা ফেরো সে-দিকেই আল্লাহ্‌র মুখ। নিঃসন্দেহে আল্লাহ্ সর্বব্যাপক, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 116,
            'page_no'       => 18,
            'jaz_no'        => 1,
            'arabic'        => 'وَقَالُوا اتَّخَذَ اللَّهُ وَلَدًا ۗ سُبْحَانَهُ ۖ بَل لَّهُ مَا فِي السَّمَاوَاتِ وَالْأَرْضِ ۖ كُلٌّ لَّهُ قَانِتُونَ',
            'english'       => 'They say, "Allah has taken a son." Exalted is He! Rather, to Him belongs whatever is in the heavens and the earth. All are devoutly obedient to Him,',
            'bangla'        => 'আর তারা বলে -- “আল্লাহ্ একটি ছেলে গ্রহণ করেছেন” । তাঁরই মহিমা হোক! বরং মহাকাশমন্ডলে ও পৃথিবীতে যা-কিছু আছে সে-সব তাঁরই, সবাই তাঁর আজ্ঞা পালনকারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 117,
            'page_no'       => 18,
            'jaz_no'        => 1,
            'arabic'        => 'بَدِيعُ السَّمَاوَاتِ وَالْأَرْضِ ۖ وَإِذَا قَضَىٰ أَمْرًا فَإِنَّمَا يَقُولُ لَهُ كُن فَيَكُونُ',
            'english'       => 'Originator of the heavens and the earth. When He decrees a matter, He only says to it, "Be," and it is.',
            'bangla'        => 'মহাকাশমন্ডলী ও পৃথিবীর আদি-স্রষ্টা! আর যখনই তিনি কোনো বিষয় বির্ধারিত করেন তিনি সে-সন্বন্ধে তখন শুধু বলেন -- “হও”, আর তা হয়ে যায়।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 118,
            'page_no'       => 18,
            'jaz_no'        => 1,
            'arabic'        => 'وَقَالَ الَّذِينَ لَا يَعْلَمُونَ لَوْلَا يُكَلِّمُنَا اللَّهُ أَوْ تَأْتِينَا آيَةٌ ۗ كَذَٰلِكَ قَالَ الَّذِينَ مِن قَبْلِهِم مِّثْلَ قَوْلِهِمْ ۘ تَشَابَهَتْ قُلُوبُهُمْ ۗ قَدْ بَيَّنَّا الْآيَاتِ لِقَوْمٍ يُوقِنُونَ',
            'english'       => 'Those who do not know say, "Why does Allah not speak to us or there come to us a sign?" Thus spoke those before them like their words. Their hearts resemble each other. We have shown clearly the signs to a people who are certain [in faith].',
            'bangla'        => 'আর যারা জানে না তারা বলে -- “আল্লাহ্ কেন আমাদের সাথে কথা বলেন না, অথবা একটি নিদর্শন আমাদের কাছে আসুক?” এমনভাবে এদের আগে যারা ছিল তারা এদের কথার অনুরূপ কথা বলেছিল। তাদের হৃদয় একই রকমের। আমরা আয়াতসমূহ সুস্পষ্ট করে রেখেছি সেই লোকদের কাছে যারা দৃঢ়প্রত্যয় রাখে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 119,
            'page_no'       => 18,
            'jaz_no'        => 1,
            'arabic'        => 'إِنَّا أَرْسَلْنَاكَ بِالْحَقِّ بَشِيرًا وَنَذِيرًا ۖ وَلَا تُسْأَلُ عَنْ أَصْحَابِ الْجَحِيمِ',
            'english'       => 'Indeed, We have sent you, [O Muhammad], with the truth as a bringer of good tidings and a warner, and you will not be asked about the companions of Hellfire.',
            'bangla'        => 'নিঃসন্দেহ আমরা তোমাকে সত্য দিয়ে পাঠিয়েছি, সুসংবাদদাতারূপে ও সতর্ককারীরূপে, আর তোমাকে জবাব দিহি করতে হবে না ভয়ঙ্কর আগুনের বাসিন্দাদের সম্পর্কে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 120,
            'page_no'       => 19,
            'jaz_no'        => 1,
            'arabic'        => 'وَلَن تَرْضَىٰ عَنكَ الْيَهُودُ وَلَا النَّصَارَىٰ حَتَّىٰ تَتَّبِعَ مِلَّتَهُمْ ۗ قُلْ إِنَّ هُدَى اللَّهِ هُوَ الْهُدَىٰ ۗ وَلَئِنِ اتَّبَعْتَ أَهْوَاءَهُم بَعْدَ الَّذِي جَاءَكَ مِنَ الْعِلْمِ ۙ مَا لَكَ مِنَ اللَّهِ مِن وَلِيٍّ وَلَا نَصِيرٍ',
            'english'       => 'And never will the Jews or the Christians approve of you until you follow their religion. Say, "Indeed, the guidance of Allah is the [only] guidance." If you were to follow their desires after what has come to you of knowledge, you would have against Allah no protector or helper.',
            'bangla'        => 'আর ইহুদীরা কখনো তোমার উপরে সন্তষ্ট হবে না, খ্রীষ্টানরাও নয়, যতক্ষণ না তুমি তাদের ধর্মমত অনুসরণ কর। তাদের বলো -- “নিশ্চয়ই আল্লাহ্‌র যা হেদায়ত তাই-ই হেদায়ত। আর তুমি যদি তাদের ইচ্ছার অনুসরণ কর তোমার কাছে জ্ঞানের যা এসেছে তার পরে, তাহলে আল্লাহর কাছ থেকে তুমি পাবে না কোনো বন্ধু-বান্ধব, না কোনো সাহায্যকারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 121,
            'page_no'       => 19,
            'jaz_no'        => 1,
            'arabic'        => 'الَّذِينَ آتَيْنَاهُمُ الْكِتَابَ يَتْلُونَهُ حَقَّ تِلَاوَتِهِ أُولَـٰئِكَ يُؤْمِنُونَ بِهِ ۗ وَمَن يَكْفُرْ بِهِ فَأُولَـٰئِكَ هُمُ الْخَاسِرُونَ',
            'english'       => 'Those to whom We have given the Book recite it with its true recital. They [are the ones who] believe in it. And whoever disbelieves in it - it is they who are the losers.',
            'bangla'        => 'যাদের আমরা গ্রন্থ দিয়েছি তারা উহার তিলাওতের ন্যায্যতা মোতাবেক উহা অধ্যয়ন করে। তারাই এতে ঈমান এনেছে। আর যারা এতে অবিশ্বাস পোষণ করে তারা নিজেরাই হয় ক্ষতিগ্রস্ত।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 122,
            'page_no'       => 19,
            'jaz_no'        => 1,
            'arabic'        => 'يَا بَنِي إِسْرَائِيلَ اذْكُرُوا نِعْمَتِيَ الَّتِي أَنْعَمْتُ عَلَيْكُمْ وَأَنِّي فَضَّلْتُكُمْ عَلَى الْعَالَمِينَ',
            'english'       => 'O Children of Israel, remember My favor which I have bestowed upon you and that I preferred you over the worlds.',
            'bangla'        => 'হে ইসরাইলের বংশধরগণ! আমার নিয়ামত স্মরণ করো যা আমি তোমাদের প্রদান করেছিলাম ও কিভাবে মানবগোষ্ঠীর উপরে তোমাদের মর্যাদা দিয়েছিলাম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 123,
            'page_no'       => 19,
            'jaz_no'        => 1,
            'arabic'        => 'وَاتَّقُوا يَوْمًا لَّا تَجْزِي نَفْسٌ عَن نَّفْسٍ شَيْئًا وَلَا يُقْبَلُ مِنْهَا عَدْلٌ وَلَا تَنفَعُهَا شَفَاعَةٌ وَلَا هُمْ يُنصَرُونَ',
            'english'       => 'And fear a Day when no soul will suffice for another soul at all, and no compensation will be accepted from it, nor will any intercession benefit it, nor will they be aided.',
            'bangla'        => 'আর হুশিয়াঁর হও এমন এক দিনের যখন এক সত্তা অন্য আ‌ত্মা থেকে কোনো প্রকার সাহায্য পাবে না, আর তার কাছ থেকে কোনো খেসারত কবুল করা হবে না, আর সুপারিশেও তার কোনো ফায়দা হবে না, আর তাদের সাহায্য করা হবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 124,
            'page_no'       => 19,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذِ ابْتَلَىٰ إِبْرَاهِيمَ رَبُّهُ بِكَلِمَاتٍ فَأَتَمَّهُنَّ ۖ قَالَ إِنِّي جَاعِلُكَ لِلنَّاسِ إِمَامًا ۖ قَالَ وَمِن ذُرِّيَّتِي ۖ قَالَ لَا يَنَالُ عَهْدِي الظَّالِمِينَ',
            'english'       => 'And [mention, O Muhammad], when Abraham was tried by his Lord with commands and he fulfilled them. [Allah] said, "Indeed, I will make you a leader for the people." [Abraham] said, "And of my descendants?" [Allah] said, "My covenant does not include the wrongdoers."',
            'bangla'        => 'আর স্মরণ করো! ইব্রাহীমকে তাঁর প্রভু কয়েকটি নির্দেশ দ্বারা পরীক্ষা করলেন, আর তিনি সেগুলো সম্পাদন করলেন। তিনি বললেন -- “আমি নিশ্চয়ই তোমাকে মানবজাতির জন্য ইমাম করতে যাচ্ছি।” তিনি বললেন -- “আর আমার বংশধরগণ থেকে?” তিনি বললেন -- “আমার অঙ্গীকার অন্যায়কারীদের উপরে বর্তায় না।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 125,
            'page_no'       => 19,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ جَعَلْنَا الْبَيْتَ مَثَابَةً لِّلنَّاسِ وَأَمْنًا وَاتَّخِذُوا مِن مَّقَامِ إِبْرَاهِيمَ مُصَلًّى ۖ وَعَهِدْنَا إِلَىٰ إِبْرَاهِيمَ وَإِسْمَاعِيلَ أَن طَهِّرَا بَيْتِيَ لِلطَّائِفِينَ وَالْعَاكِفِينَ وَالرُّكَّعِ السُّجُودِ',
            'english'       => 'And [mention] when We made the House a place of return for the people and [a place of] security. And take, [O believers], from the standing place of Abraham a place of prayer. And We charged Abraham and Ishmael, [saying], "Purify My House for those who perform Tawaf and those who are staying [there] for worship and those who bow and prostrate [in prayer]."',
            'bangla'        => 'আর চেয়ে দেখো! আমরা গৃহকে মানুষের জন্য সম্মেলনস্থল ও নিরাপত্তা-স্থান বানিয়েছিলাম। আর “মক্কাম-ই-ইব্রাহীমকে উপাসনা-ভূমি করো।” আর আমরা ইব্রাহীম ও ইসমাইলের প্রতি নির্দেশ দিয়েছিলাম -- “আমার গৃহ পবিত্র করে রেখো তওয়াফকারীদের ও ই’তিকাফকারীদের ও রুকু-সিজদাকারীদের জন্য।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 126,
            'page_no'       => 19,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ قَالَ إِبْرَاهِيمُ رَبِّ اجْعَلْ هَـٰذَا بَلَدًا آمِنًا وَارْزُقْ أَهْلَهُ مِنَ الثَّمَرَاتِ مَنْ آمَنَ مِنْهُم بِاللَّهِ وَالْيَوْمِ الْآخِرِ ۖ قَالَ وَمَن كَفَرَ فَأُمَتِّعُهُ قَلِيلًا ثُمَّ أَضْطَرُّهُ إِلَىٰ عَذَابِ النَّارِ ۖ وَبِئْسَ الْمَصِيرُ',
            'english'       => 'And [mention] when Abraham said, "My Lord, make this a secure city and provide its people with fruits - whoever of them believes in Allah and the Last Day." [Allah] said. "And whoever disbelieves - I will grant him enjoyment for a little; then I will force him to the punishment of the Fire, and wretched is the destination."',
            'bangla'        => 'আর স্মরণ করো! ইব্রাহীম বললেন -- “আমার প্রভু! এটিকে তুমি নিরাপদ নগর বানাও, আর এর লোকদের ফলফসল দিয়ে জীবিকা দান করো -- তাদের যারা আল্লাহ্‌তে ও আখেরাতের দিনে ঈমান এনেছে।” তিনি বললেন -- “আর যে অবিশ্বাস পোষণ করবে তাকে আমি ক্ষণেকের জন্য ভোগ করতে দেব, তারপর তাড়িয়ে নেব আগুনের শাস্তির দিকে, আর নিকৃষ্ট গন্তব্যস্থল।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 127,
            'page_no'       => 20,
            'jaz_no'        => 1,
            'arabic'        => 'وَإِذْ يَرْفَعُ إِبْرَاهِيمُ الْقَوَاعِدَ مِنَ الْبَيْتِ وَإِسْمَاعِيلُ رَبَّنَا تَقَبَّلْ مِنَّا ۖ إِنَّكَ أَنتَ السَّمِيعُ الْعَلِيمُ',
            'english'       => 'And [mention] when Abraham was raising the foundations of the House and [with him] Ishmael, [saying], "Our Lord, accept [this] from us. Indeed You are the Hearing, the Knowing.',
            'bangla'        => 'আর স্মরণ করো! ইব্রাহীম গৃহের ভিত্তি গেথেঁ তুললেন, আর ইসমাইল। “আমাদের প্রভু! আমাদের থেকে তুমি গ্রহণ করো। নিঃসন্দেহ তুমি নিজেই সর্বশ্রোতা, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 128,
            'page_no'       => 20,
            'jaz_no'        => 1,
            'arabic'        => 'رَبَّنَا وَاجْعَلْنَا مُسْلِمَيْنِ لَكَ وَمِن ذُرِّيَّتِنَا أُمَّةً مُّسْلِمَةً لَّكَ وَأَرِنَا مَنَاسِكَنَا وَتُبْ عَلَيْنَا ۖ إِنَّكَ أَنتَ التَّوَّابُ الرَّحِيمُ',
            'english'       => 'Our Lord, and make us Muslims [in submission] to You and from our descendants a Muslim nation [in submission] to You. And show us our rites and accept our repentance. Indeed, You are the Accepting of repentance, the Merciful.',
            'bangla'        => '“আমাদের প্রভু! আর তোমার প্রতি আমাদের মুসলিম করে রেখো, আর আমাদের সন্তানসন্ততিদের থেকে তোমার প্রতি মুসলিম উম্মৎ, আর আমাদের উপাসনা-প্রণালী আমাদের দেখিয়ে দাও, আর আমাদের তওবা কবুল করো, নিঃসন্দেহ তুমি নিজেই তওবা কবুলকারী, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 129,
            'page_no'       => 20,
            'jaz_no'        => 1,
            'arabic'        => 'رَبَّنَا وَابْعَثْ فِيهِمْ رَسُولًا مِّنْهُمْ يَتْلُو عَلَيْهِمْ آيَاتِكَ وَيُعَلِّمُهُمُ الْكِتَابَ وَالْحِكْمَةَ وَيُزَكِّيهِمْ ۚ إِنَّكَ أَنتَ الْعَزِيزُ الْحَكِيمُ',
            'english'       => 'Our Lord, and send among them a messenger from themselves who will recite to them Your verses and teach them the Book and wisdom and purify them. Indeed, You are the Exalted in Might, the Wise."',
            'bangla'        => '“আমাদের প্রভু! তাদের মাঝে তাদের থেকে রসূল উত্থাপন করো যিনি তোমার প্রত্যাদেশসমূহ তাদের কাছে পড়ে শোনাবেন, আর তাদের শেখাবেন ধর্মগ্রন্থ ও জ্ঞান-বিজ্ঞান, আর তাদের পবিত্র করবেন। নিশ্চয়ই তুমি নিজেই মহাশক্তিশালী, পরমজ্ঞানী।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 130,
            'page_no'       => 20,
            'jaz_no'        => 1,
            'arabic'        => 'وَمَن يَرْغَبُ عَن مِّلَّةِ إِبْرَاهِيمَ إِلَّا مَن سَفِهَ نَفْسَهُ ۚ وَلَقَدِ اصْطَفَيْنَاهُ فِي الدُّنْيَا ۖ وَإِنَّهُ فِي الْآخِرَةِ لَمِنَ الصَّالِحِينَ',
            'english'       => 'And who would be averse to the religion of Abraham except one who makes a fool of himself. And We had chosen him in this world, and indeed he, in the Hereafter, will be among the righteous.',
            'bangla'        => 'আর যে ইব্রাহীমের ধর্মমত থেকে অপসৃত হয় সে ছাড়া আর কে নিজেকে নির্বোধ বানায়? আর অবশ্যই আমরা তাঁকে এই দুনিয়াতে মনোনীত করেছিলাম, আর নিঃসন্দেহে তিনি আখেরাতে হবেন ধার্মিকদের অন্যতম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 131,
            'page_no'       => 20,
            'jaz_no'        => 1,
            'arabic'        => 'إِذْ قَالَ لَهُ رَبُّهُ أَسْلِمْ ۖ قَالَ أَسْلَمْتُ لِرَبِّ الْعَالَمِينَ',
            'english'       => 'When his Lord said to him, "Submit", he said "I have submitted [in Islam] to the Lord of the worlds."',
            'bangla'        => 'স্মরণ করো! তাঁর প্রভু তাঁকে বললেন -- “ইসলাম গ্রহণ করো!” তিনি বললেন -- “আমি সমস্ত সৃষ্টজগতের প্রভুর কাছে আ‌ত্মসমর্পণ করছি।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 132,
            'page_no'       => 20,
            'jaz_no'        => 1,
            'arabic'        => 'وَوَصَّىٰ بِهَا إِبْرَاهِيمُ بَنِيهِ وَيَعْقُوبُ يَا بَنِيَّ إِنَّ اللَّهَ اصْطَفَىٰ لَكُمُ الدِّينَ فَلَا تَمُوتُنَّ إِلَّا وَأَنتُم مُّسْلِمُونَ',
            'english'       => 'And Abraham instructed his sons [to do the same] and [so did] Jacob, [saying], "O my sons, indeed Allah has chosen for you this religion, so do not die except while you are Muslims."',
            'bangla'        => 'আর ইব্রাহীম তাঁর সন্তানদের এইটির ভারার্পণ করেছিলেন, আর ইয়াকুব। “হে আমার সন্তানসন্ততি! নিশ্চয় আল্লাহ্ তোমাদের জন্য এই ধর্ম মনোনীত করেছেন, অতএব তোমরা প্রাণত্যাগ করো না তোমরা মুসলিম না হয়ে।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 133,
            'page_no'       => 20,
            'jaz_no'        => 1,
            'arabic'        => 'أَمْ كُنتُمْ شُهَدَاءَ إِذْ حَضَرَ يَعْقُوبَ الْمَوْتُ إِذْ قَالَ لِبَنِيهِ مَا تَعْبُدُونَ مِن بَعْدِي قَالُوا نَعْبُدُ إِلَـٰهَكَ وَإِلَـٰهَ آبَائِكَ إِبْرَاهِيمَ وَإِسْمَاعِيلَ وَإِسْحَاقَ إِلَـٰهًا وَاحِدًا وَنَحْنُ لَهُ مُسْلِمُونَ',
            'english'       => 'Or were you witnesses when death approached Jacob, when he said to his sons, "What will you worship after me?" They said, "We will worship your God and the God of your fathers, Abraham and Ishmael and Isaac - one God. And we are Muslims [in submission] to Him."',
            'bangla'        => 'অথবা তোমরা কি প্রত্যক্ষদর্শী ছিলে যখন ইয়াকুবের মৃত্যু এসেছিল, যখন তিনি তাঁর সন্তানদের বলেছিলেন -- “তোমরা আমার পরে কার এবাদত করবে?” ওরা বলেছিল -- “আমরা এবাদত করব তোমার উপাস্যের ও তোমার পিতৃপুরুষ ইব্রাহীম ও ইসমাইল ও ইসহাকের উপাস্যের -- একক উপাস্যের, আর তাঁর কাছে আমরা মুসলিম।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 134,
            'page_no'       => 20,
            'jaz_no'        => 1,
            'arabic'        => 'تِلْكَ أُمَّةٌ قَدْ خَلَتْ ۖ لَهَا مَا كَسَبَتْ وَلَكُم مَّا كَسَبْتُمْ ۖ وَلَا تُسْأَلُونَ عَمَّا كَانُوا يَعْمَلُونَ',
            'english'       => 'That was a nation which has passed on. It will have [the consequence of] what it earned, and you will have what you have earned. And you will not be asked about what they used to do.',
            'bangla'        => 'এরা ঐসব লোক যারা গত হয়ে গেছে। তাদের জন্য আছে যা তারা অর্জন করেছিল আর তোমাদের জন্য যা তোমরা অর্জন করছ, আর তোমাদের জবাবদিহি করতে হবে না ওরা যা করছিল সে সন্বন্ধে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 135,
            'page_no'       => 21,
            'jaz_no'        => 1,
            'arabic'        => 'وَقَالُوا كُونُوا هُودًا أَوْ نَصَارَىٰ تَهْتَدُوا ۗ قُلْ بَلْ مِلَّةَ إِبْرَاهِيمَ حَنِيفًا ۖ وَمَا كَانَ مِنَ الْمُشْرِكِينَ',
            'english'       => 'They say, "Be Jews or Christians [so] you will be guided." Say, "Rather, [we follow] the religion of Abraham, inclining toward truth, and he was not of the polytheists."',
            'bangla'        => 'আর তারা বলে -- “ইহুদীয় বা খ্রীষ্টান হও, তোমরা হেদায়ত পাবে।” তুমি বলো -- “বরং অনন্যচিত্ত ইব্রাহীমের ধর্মমত। আর তিনি মুশরিকদের অন্তর্ভুক্ত ছিলেন না?”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 136,
            'page_no'       => 21,
            'jaz_no'        => 1,
            'arabic'        => 'قُولُوا آمَنَّا بِاللَّهِ وَمَا أُنزِلَ إِلَيْنَا وَمَا أُنزِلَ إِلَىٰ إِبْرَاهِيمَ وَإِسْمَاعِيلَ وَإِسْحَاقَ وَيَعْقُوبَ وَالْأَسْبَاطِ وَمَا أُوتِيَ مُوسَىٰ وَعِيسَىٰ وَمَا أُوتِيَ النَّبِيُّونَ مِن رَّبِّهِمْ لَا نُفَرِّقُ بَيْنَ أَحَدٍ مِّنْهُمْ وَنَحْنُ لَهُ مُسْلِمُونَ',
            'english'       => 'Say, [O believers], "We have believed in Allah and what has been revealed to us and what has been revealed to Abraham and Ishmael and Isaac and Jacob and the Descendants and what was given to Moses and Jesus and what was given to the prophets from their Lord. We make no distinction between any of them, and we are Muslims [in submission] to Him."',
            'bangla'        => 'তোমরা বলো -- “আমরা আল্লাহ্‌তে ঈমান এনেছি, আর তা’তে যা আমাদের জন্য নাযিল হয়েছে, আর যা নাযিল হয়েছিল ইব্রাহীমের কাছে, আর ইসমাইল ও ইসহাক, আর ইয়াকুব এবং বিভিন্ন গোত্রের কাছে, আর যা দেয়া হয়েছিল মূসাকে এবং ঈসাকে, আর যা সকল নবীদের তাঁদের প্রভুর কাছ থেকে দেয়া হয়েছিল। আমরা তাঁদের কোনো একজনের মধ্যেও পার্থক্য করি না। আর আমরা তাঁরই কাছে মুসলিম হচ্ছি।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 137,
            'page_no'       => 21,
            'jaz_no'        => 1,
            'arabic'        => 'فَإِنْ آمَنُوا بِمِثْلِ مَا آمَنتُم بِهِ فَقَدِ اهْتَدَوا ۖ وَّإِن تَوَلَّوْا فَإِنَّمَا هُمْ فِي شِقَاقٍ ۖ فَسَيَكْفِيكَهُمُ اللَّهُ ۚ وَهُوَ السَّمِيعُ الْعَلِيمُ',
            'english'       => 'So if they believe in the same as you believe in, then they have been [rightly] guided; but if they turn away, they are only in dissension, and Allah will be sufficient for you against them. And He is the Hearing, the Knowing.',
            'bangla'        => 'এবার যদি তারা ঈমান আনত যেভাবে তোমরা তাঁর প্রতি ঈমান আনছো, তাহলে নিঃসন্দেহ তারা হেদায়ত পেতো, আর যদি তারা ফিরে যায় তাহলে অবশ্যই তারা বিরোধিতাতে নিমগ্ন। অতএব আল্লাহই তাদের বিরুদ্ধে তোমার জন্য যথেষ্ট, কারণ তিনিই সর্বশ্রোতা, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 138,
            'page_no'       => 21,
            'jaz_no'        => 1,
            'arabic'        => 'صِبْغَةَ اللَّهِ ۖ وَمَنْ أَحْسَنُ مِنَ اللَّهِ صِبْغَةً ۖ وَنَحْنُ لَهُ عَابِدُونَ',
            'english'       => '[And say, "Ours is] the religion of Allah. And who is better than Allah in [ordaining] religion? And we are worshippers of Him."',
            'bangla'        => '“আল্লাহ্‌র রঙ। আর রঙের ক্ষেত্রে আল্লাহ্‌র চাইতে কে বেশী সুন্দর? আর আমরা তাঁরই উপাসনাকারী।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 139,
            'page_no'       => 21,
            'jaz_no'        => 1,
            'arabic'        => 'قُلْ أَتُحَاجُّونَنَا فِي اللَّهِ وَهُوَ رَبُّنَا وَرَبُّكُمْ وَلَنَا أَعْمَالُنَا وَلَكُمْ أَعْمَالُكُمْ وَنَحْنُ لَهُ مُخْلِصُونَ',
            'english'       => 'Say, [O Muhammad], "Do you argue with us about Allah while He is our Lord and your Lord? For us are our deeds, and for you are your deeds. And we are sincere [in deed and intention] to Him."',
            'bangla'        => 'বলো -- “তোমরা কি আমাদের সঙ্গে আল্লাহ্‌র সন্বন্ধে হুজ্জত করছ অথচ তিনি আমাদের প্রভু, তোমাদেরও প্রভু? আর আমাদের কাজ আমাদের হবে, ও তোমাদের কাজ তোমাদের হবে। আর আমরা তাঁরই প্রতি একান্ত অনুরক্ত।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 140,
            'page_no'       => 21,
            'jaz_no'        => 1,
            'arabic'        => 'أَمْ تَقُولُونَ إِنَّ إِبْرَاهِيمَ وَإِسْمَاعِيلَ وَإِسْحَاقَ وَيَعْقُوبَ وَالْأَسْبَاطَ كَانُوا هُودًا أَوْ نَصَارَىٰ ۗ قُلْ أَأَنتُمْ أَعْلَمُ أَمِ اللَّهُ ۗ وَمَنْ أَظْلَمُ مِمَّن كَتَمَ شَهَادَةً عِندَهُ مِنَ اللَّهِ ۗ وَمَا اللَّهُ بِغَافِلٍ عَمَّا تَعْمَلُونَ',
            'english'       => 'Or do you say that Abraham and Ishmael and Isaac and Jacob and the Descendants were Jews or Christians? Say, "Are you more knowing or is Allah?" And who is more unjust than one who conceals a testimony he has from Allah? And Allah is not unaware of what you do.',
            'bangla'        => 'অথবা তোমরা কি বলো যে ইব্রাহীম ও ইসমাইল ও ইসহাক ও ইয়াকুব এবং বিভিন্ন গোত্রেরা ইহুদী অথবা খ্রীষ্টান ছিলেন? বলো -- “তোমরা কি বেশি জানো, না আল্লাহ্‌? আর তাঁর চাইতে কে বেশি অন্যায় করছে যে গোপন করছে সেই সাক্ষ্য যা আল্লাহ্‌র কাছ থেকে সে পেয়েছে? আর তোমরা যা করছ সে সন্বন্ধে আল্লাহ্ বেখেয়াল নন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 141,
            'page_no'       => 21,
            'jaz_no'        => 1,
            'arabic'        => 'تِلْكَ أُمَّةٌ قَدْ خَلَتْ ۖ لَهَا مَا كَسَبَتْ وَلَكُم مَّا كَسَبْتُمْ ۖ وَلَا تُسْأَلُونَ عَمَّا كَانُوا يَعْمَلُونَ',
            'english'       => 'That is a nation which has passed on. It will have [the consequence of] what it earned, and you will have what you have earned. And you will not be asked about what they used to do.',
            'bangla'        => 'এরা ঐসব লোক যারা গত হয়ে গেছে। তাদের জন্য আছে যা তারা অর্জন করেছিল, আর তোমাদের জন্য যা তোমরা অর্জন করছ, আর তোমাদের জবাবদিহি করতে হবে না ওরা যা করছিল সে-সন্বন্ধে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 142,
            'page_no'       => 22,
            'jaz_no'        => 2,
            'arabic'        => 'سَيَقُولُ السُّفَهَاءُ مِنَ النَّاسِ مَا وَلَّاهُمْ عَن قِبْلَتِهِمُ الَّتِي كَانُوا عَلَيْهَا ۚ قُل لِّلَّهِ الْمَشْرِقُ وَالْمَغْرِبُ ۚ يَهْدِي مَن يَشَاءُ إِلَىٰ صِرَاطٍ مُّسْتَقِيمٍ',
            'english'       => 'The foolish among the people will say, "What has turned them away from their qiblah, which they used to face?" Say, "To Allah belongs the east and the west. He guides whom He wills to a straight path."',
            'bangla'        => 'লোকদের মধ্যের নির্বোধরা শীঘ্রই বলবে -- “তাদের যে কিবলাহ্‌তে তারা তাদের বদলালো কিসে?” তুমি বলো -- “পূর্ব ও পশ্চিমের মালিক আল্লাহ্‌, তিনি যাকে ইচ্ছা করেন তাকে সহজ-সঠিক পথের দিকে পরিচালিত করেন।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 143,
            'page_no'       => 22,
            'jaz_no'        => 2,
            'arabic'        => 'وَكَذَٰلِكَ جَعَلْنَاكُمْ أُمَّةً وَسَطًا لِّتَكُونُوا شُهَدَاءَ عَلَى النَّاسِ وَيَكُونَ الرَّسُولُ عَلَيْكُمْ شَهِيدًا ۗ وَمَا جَعَلْنَا الْقِبْلَةَ الَّتِي كُنتَ عَلَيْهَا إِلَّا لِنَعْلَمَ مَن يَتَّبِعُ الرَّسُولَ مِمَّن يَنقَلِبُ عَلَىٰ عَقِبَيْهِ ۚ وَإِن كَانَتْ لَكَبِيرَةً إِلَّا عَلَى الَّذِينَ هَدَى اللَّهُ ۗ وَمَا كَانَ اللَّهُ لِيُضِيعَ إِيمَانَكُمْ ۚ إِنَّ اللَّهَ بِالنَّاسِ لَرَءُوفٌ رَّحِيمٌ',
            'english'       => 'And thus we have made you a just community that you will be witnesses over the people and the Messenger will be a witness over you. And We did not make the qiblah which you used to face except that We might make evident who would follow the Messenger from who would turn back on his heels. And indeed, it is difficult except for those whom Allah has guided. And never would Allah have caused you to lose your faith. Indeed Allah is, to the people, Kind and Merciful.',
            'bangla'        => 'আর এইভাবে তোমাদের আমরা বানিয়েছি একটি সুসামঞ্জস্যরক্ষাকারী সমাজ, যাতে তোমরা মানবজাতির জন্য সাক্ষী হতে পারো, আর রসূল তোমাদের জন্য সাক্ষী হতে পারেন। আর আমরা তাকে কিবলাহ্ বানাতাম না যার উপরে তুমি ছিলে, যদি না আমরা যাচাই করতাম যে কে রসূলকে অনুসরণ করে আর কে তার মোড় ফিরিয়ে ঘুরে যায়। আর নিঃসন্দেহ এটি কঠিন ছিল তাদের ক্ষেত্রে ছাড়া যাদের আল্লাহ্ হেদায়ত করেছেন। আর আল্লাহ্ তোমাদের ঈমান কখনও নিষ্ফল হতে দেবেন না। নিঃসন্দেহ আল্লাহ্ মানুষের প্রতি পরম স্নেহময়, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 144,
            'page_no'       => 22,
            'jaz_no'        => 2,
            'arabic'        => 'قَدْ نَرَىٰ تَقَلُّبَ وَجْهِكَ فِي السَّمَاءِ ۖ فَلَنُوَلِّيَنَّكَ قِبْلَةً تَرْضَاهَا ۚ فَوَلِّ وَجْهَكَ شَطْرَ الْمَسْجِدِ الْحَرَامِ ۚ وَحَيْثُ مَا كُنتُمْ فَوَلُّوا وُجُوهَكُمْ شَطْرَهُ ۗ وَإِنَّ الَّذِينَ أُوتُوا الْكِتَابَ لَيَعْلَمُونَ أَنَّهُ الْحَقُّ مِن رَّبِّهِمْ ۗ وَمَا اللَّهُ بِغَافِلٍ عَمَّا يَعْمَلُونَ',
            'english'       => 'We have certainly seen the turning of your face, [O Muhammad], toward the heaven, and We will surely turn you to a qiblah with which you will be pleased. So turn your face toward al-Masjid al-Haram. And wherever you [believers] are, turn your faces toward it [in prayer]. Indeed, those who have been given the Scripture well know that it is the truth from their Lord. And Allah is not unaware of what they do.',
            'bangla'        => 'আমরা নিশ্চয়ই দেখেছি আকাশের দিকে তুমি মুখ তোলে রয়েছ, তাই আমরা নিঃসন্দেহ তোমাকে কর্তৃত্ব দেবো কিবলাহ্‌র যা তুমি পছন্দ কর। কাজেই হারাম মসজিদের দিকে তোমার মুখ ফেরাও। আর যেখানেই তোমরা থাক তোমাদের মুখ এর দিকেই ফেরাবে। আর যাদের কিতাব দেয়া হয়েছে তারা অবশ্যই জানে যে নিঃসন্দেহ এটি তাদের প্রভুর কাছ থেকে আসা ধ্রুব-সত্য। আর তারা যা করছে আল্লাহ্ সে-সন্বন্ধে বেখেয়াল নন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 145,
            'page_no'       => 22,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَئِنْ أَتَيْتَ الَّذِينَ أُوتُوا الْكِتَابَ بِكُلِّ آيَةٍ مَّا تَبِعُوا قِبْلَتَكَ ۚ وَمَا أَنتَ بِتَابِعٍ قِبْلَتَهُمْ ۚ وَمَا بَعْضُهُم بِتَابِعٍ قِبْلَةَ بَعْضٍ ۚ وَلَئِنِ اتَّبَعْتَ أَهْوَاءَهُم مِّن بَعْدِ مَا جَاءَكَ مِنَ الْعِلْمِ ۙ إِنَّكَ إِذًا لَّمِنَ الظَّالِمِينَ',
            'english'       => 'And if you brought to those who were given the Scripture every sign, they would not follow your qiblah. Nor will you be a follower of their qiblah. Nor would they be followers of one another\'s qiblah. So if you were to follow their desires after what has come to you of knowledge, indeed, you would then be among the wrongdoers.',
            'bangla'        => 'আর যদিও তুমি যাদের কিতাব দেয়া হয়েছে তাদের কাছে সবক’টি নিদর্শন নিয়ে আস তবুও তারা তোমার কিবলাহ্ মেনে চলবে না। আর তুমি তাদের কিবলাহ্‌র অনুবর্তী হতে পারো না, আবার তাদের কেউ-কেউ পরস্পরের কিবলাহ্‌র অনুবর্তী নয়। আর তুমি যদি তাদের হীন মনোবৃত্তির অনুসরণ কর তোমার কাছে জ্ঞানের যা এসেছে তার পরেও, তাহলে নিঃসন্দেহ তুমিও হবে অন্যায়কারীদের অন্যতম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 146,
            'page_no'       => 23,
            'jaz_no'        => 2,
            'arabic'        => 'الَّذِينَ آتَيْنَاهُمُ الْكِتَابَ يَعْرِفُونَهُ كَمَا يَعْرِفُونَ أَبْنَاءَهُمْ ۖ وَإِنَّ فَرِيقًا مِّنْهُمْ لَيَكْتُمُونَ الْحَقَّ وَهُمْ يَعْلَمُونَ',
            'english'       => 'Those to whom We gave the Scripture know him as they know their own sons. But indeed, a party of them conceal the truth while they know [it].',
            'bangla'        => 'যাদের আমরা কিতাব দিয়েছি তারা তাঁকে চিনতে পারছে যেমন তারা চিনতে পারে তাদের সন্তানদের। কিন্তু তাদের মধ্যের একদল নিশ্চয়ই সত্য কথা গোপন করছে, আর তারা জানে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 147,
            'page_no'       => 23,
            'jaz_no'        => 2,
            'arabic'        => 'الْحَقُّ مِن رَّبِّكَ ۖ فَلَا تَكُونَنَّ مِنَ الْمُمْتَرِينَ',
            'english'       => 'The truth is from your Lord, so never be among the doubters.',
            'bangla'        => 'এই সত্য এসেছে তোমার প্রভুর কাছ থেকে অতএব তোমারা সন্দেহপরায়ণদের অন্তর্ভুক্ত হয়ো না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 148,
            'page_no'       => 23,
            'jaz_no'        => 2,
            'arabic'        => 'وَلِكُلٍّ وِجْهَةٌ هُوَ مُوَلِّيهَا ۖ فَاسْتَبِقُوا الْخَيْرَاتِ ۚ أَيْنَ مَا تَكُونُوا يَأْتِ بِكُمُ اللَّهُ جَمِيعًا ۚ إِنَّ اللَّهَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
            'english'       => 'For each [religious following] is a direction toward which it faces. So race to [all that is] good. Wherever you may be, Allah will bring you forth [for judgement] all together. Indeed, Allah is over all things competent.',
            'bangla'        => 'আর প্রত্যেকের জন্য একটি কেন্দ্রস্থল আছে যে-দিকে সে ফেরে, কাজেই সৎকর্মে একে অন্যের সাথে তোমরা প্রতিযোগিতা করো। যেখানেই তোমরা থাকো না কেন, আল্লাহ্ তোমাদের সবাইকে একত্রিত করবেন। নিঃসন্দেহ আল্লাহ্ সব-কি ছুর উপরে সর্বশক্তিমান।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 149,
            'page_no'       => 23,
            'jaz_no'        => 2,
            'arabic'        => 'وَمِنْ حَيْثُ خَرَجْتَ فَوَلِّ وَجْهَكَ شَطْرَ الْمَسْجِدِ الْحَرَامِ ۖ وَإِنَّهُ لَلْحَقُّ مِن رَّبِّكَ ۗ وَمَا اللَّهُ بِغَافِلٍ عَمَّا تَعْمَلُونَ',
            'english'       => 'So from wherever you go out [for prayer, O Muhammad] turn your face toward al- Masjid al-Haram, and indeed, it is the truth from your Lord. And Allah is not unaware of what you do.',
            'bangla'        => 'আর যেখান থেকেই তুমি আস, তোমার মুখ পবিত্র মসজিদের দিকে ফেরাও। নিঃসন্দেহ এটি তোমার প্রভুর কাছ থেকে সত্য। আর অবশ্যই আল্লাহ্ বেখেয়াল নন তোমরা যা করো সে-সন্বন্ধে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 150,
            'page_no'       => 23,
            'jaz_no'        => 2,
            'arabic'        => 'وَمِنْ حَيْثُ خَرَجْتَ فَوَلِّ وَجْهَكَ شَطْرَ الْمَسْجِدِ الْحَرَامِ ۚ وَحَيْثُ مَا كُنتُمْ فَوَلُّوا وُجُوهَكُمْ شَطْرَهُ لِئَلَّا يَكُونَ لِلنَّاسِ عَلَيْكُمْ حُجَّةٌ إِلَّا الَّذِينَ ظَلَمُوا مِنْهُمْ فَلَا تَخْشَوْهُمْ وَاخْشَوْنِي وَلِأُتِمَّ نِعْمَتِي عَلَيْكُمْ وَلَعَلَّكُمْ تَهْتَدُونَ',
            'english'       => 'And from wherever you go out [for prayer], turn your face toward al-Masjid al-Haram. And wherever you [believers] may be, turn your faces toward it in order that the people will not have any argument against you, except for those of them who commit wrong; so fear them not but fear Me. And [it is] so I may complete My favor upon you and that you may be guided.',
            'bangla'        => 'আর যেখান থেকেই তুমি আস, তোমার মুখ পবিত্র মসজিদের দিকে ফেরাবে। আর যেখানেই তোমরা থাকো, তোমাদের মুখ সেই দিকেই ফেরাবে। যাতে তোমাদের বিরুদ্ধে লোকজনদের কোনো হুজ্জত না থাকে -- তাদের মাঝে যারা অন্যায় করে তারা ব্যতীত। অতএব তাদের ভয় করো না, বরং ভয় করো আমাকে। আর যাতে আমি তোমাদের উপরে আমার নিয়ামত সম্পূর্ণ করতে পারি, আর যাতে তোমরা সুপথগামী হতে পারো, --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 151,
            'page_no'       => 23,
            'jaz_no'        => 2,
            'arabic'        => 'كَمَا أَرْسَلْنَا فِيكُمْ رَسُولًا مِّنكُمْ يَتْلُو عَلَيْكُمْ آيَاتِنَا وَيُزَكِّيكُمْ وَيُعَلِّمُكُمُ الْكِتَابَ وَالْحِكْمَةَ وَيُعَلِّمُكُم مَّا لَمْ تَكُونُوا تَعْلَمُونَ',
            'english'       => 'Just as We have sent among you a messenger from yourselves reciting to you Our verses and purifying you and teaching you the Book and wisdom and teaching you that which you did not know.',
            'bangla'        => 'যেমন, আমরা তোমাদের কাছে তোমাদের মধ্যে থেকে একজন রসূল পাঠিয়েছি, যিনি আমাদের বাণী তোমাদের কাছে তিলাওত করছেন, আর তোমাদের পবিত্র করছেন, আর তোমাদের ধর্মগ্রন্থ ও জ্ঞানবিজ্ঞান শিক্ষা দিচ্ছেন, আর তোমাদের শেখাচ্ছেন যা তোমরা জানতে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 152,
            'page_no'       => 23,
            'jaz_no'        => 2,
            'arabic'        => 'فَاذْكُرُونِي أَذْكُرْكُمْ وَاشْكُرُوا لِي وَلَا تَكْفُرُونِ',
            'english'       => 'So remember Me; I will remember you. And be grateful to Me and do not deny Me.',
            'bangla'        => 'অতএব আমাকে স্মরণ করো, আমিও তোমাদের স্মরণ করবো, আর আমার প্রতি কৃতজ্ঞ হও, আর আমাকে অস্বীকার করো না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 153,
            'page_no'       => 23,
            'jaz_no'        => 2,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا اسْتَعِينُوا بِالصَّبْرِ وَالصَّلَاةِ ۚ إِنَّ اللَّهَ مَعَ الصَّابِرِينَ',
            'english'       => 'O you who have believed, seek help through patience and prayer. Indeed, Allah is with the patient.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! সাহায্য কামনা করো ধৈর্য ধরে ও নামায পড়ে! নিঃসন্দেহ আল্লাহ্ সবুরকারীদের সাথে আছেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 154,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَا تَقُولُوا لِمَن يُقْتَلُ فِي سَبِيلِ اللَّهِ أَمْوَاتٌ ۚ بَلْ أَحْيَاءٌ وَلَـٰكِن لَّا تَشْعُرُونَ',
            'english'       => 'And do not say about those who are killed in the way of Allah, "They are dead." Rather, they are alive, but you perceive [it] not.',
            'bangla'        => 'আর যারা আল্লাহ্‌র পথে নিহত হয় তাদের বলো না -- “মৃত,” বরং জীবন্ত, যদিও তোমরা বুঝতে পারছ না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 155,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَنَبْلُوَنَّكُم بِشَيْءٍ مِّنَ الْخَوْفِ وَالْجُوعِ وَنَقْصٍ مِّنَ الْأَمْوَالِ وَالْأَنفُسِ وَالثَّمَرَاتِ ۗ وَبَشِّرِ الصَّابِرِينَ',
            'english'       => 'And We will surely test you with something of fear and hunger and a loss of wealth and lives and fruits, but give good tidings to the patient,',
            'bangla'        => 'আর আমরা নিশ্চয়ই তোমাদের পরীক্ষা করবো কিছু ভয়, আর ক্ষুধা দিয়ে, আর মাল-আসবাবের, আর লোকজনের আর ফল- ফসলের লোকসান ক’রে। আর সুসংবাদ দাও ধৈর্যশীলদের --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 156,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'الَّذِينَ إِذَا أَصَابَتْهُم مُّصِيبَةٌ قَالُوا إِنَّا لِلَّهِ وَإِنَّا إِلَيْهِ رَاجِعُونَ',
            'english'       => 'Who, when disaster strikes them, say, "Indeed we belong to Allah, and indeed to Him we will return."',
            'bangla'        => 'যারা তাদের উপরে কোনো আপদ-বিপদ ঘটলে বলে -- “নিঃসন্দেহ আমরা আল্লাহ্‌র জন্যে, আর অবশ্যই আমরা তাঁরই কাছে প্রত্যাবর্তনকারী।”'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 157,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'أُولَـٰئِكَ عَلَيْهِمْ صَلَوَاتٌ مِّن رَّبِّهِمْ وَرَحْمَةٌ ۖ وَأُولَـٰئِكَ هُمُ الْمُهْتَدُونَ',
            'english'       => 'Those are the ones upon whom are blessings from their Lord and mercy. And it is those who are the [rightly] guided.',
            'bangla'        => 'এইসব -- তাদের উপরে তাদের প্রভুর কাছ থেকে রয়েছে আশবাদ ও করুণা, আর এরা নিজেরাই সুপথগামী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 158,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'إِنَّ الصَّفَا وَالْمَرْوَةَ مِن شَعَائِرِ اللَّهِ ۖ فَمَنْ حَجَّ الْبَيْتَ أَوِ اعْتَمَرَ فَلَا جُنَاحَ عَلَيْهِ أَن يَطَّوَّفَ بِهِمَا ۚ وَمَن تَطَوَّعَ خَيْرًا فَإِنَّ اللَّهَ شَاكِرٌ عَلِيمٌ',
            'english'       => 'Indeed, as-Safa and al-Marwah are among the symbols of Allah. So whoever makes Hajj to the House or performs \'umrah - there is no blame upon him for walking between them. And whoever volunteers good - then indeed, Allah is appreciative and Knowing.',
            'bangla'        => 'নিঃসন্দেহ সাফা ও মারওয়াহ্ আল্লাহ্‌র নিদর্শনসমূহের অন্যতম। তাই যে কেউ গৃহে হজ করে বা উমরাহ করে তার জন্য অপরাধ হবে না যদি সে এ দুইয়ের মাঝে তওয়াফ করে। আর যে কেউ স্বতঃপ্রণোদিতভাবে সৎকর্ম করে, আল্লাহ্ নিশ্চয়ই অতি দানশীল, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 159,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'إِنَّ الَّذِينَ يَكْتُمُونَ مَا أَنزَلْنَا مِنَ الْبَيِّنَاتِ وَالْهُدَىٰ مِن بَعْدِ مَا بَيَّنَّاهُ لِلنَّاسِ فِي الْكِتَابِ ۙ أُولَـٰئِكَ يَلْعَنُهُمُ اللَّهُ وَيَلْعَنُهُمُ اللَّاعِنُونَ',
            'english'       => 'Indeed, those who conceal what We sent down of clear proofs and guidance after We made it clear for the people in the Scripture - those are cursed by Allah and cursed by those who curse,',
            'bangla'        => 'নিঃসন্দেহ যারা গোপন করে রাখে পরিস্কার প্রমাণাবলী ও পথনির্দেশের যে-সব আমরা অবতারণ করেছিলাম এগুলো জণগণের জন্য ধর্মগন্থে সুস্পষ্টভাবে বিবৃত করার পরেও, তারাই! -- যাদের আল্লাহ্ লানৎ দেন, আর তাদের বঞ্চিত করে লানৎকারীরা --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 160,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'إِلَّا الَّذِينَ تَابُوا وَأَصْلَحُوا وَبَيَّنُوا فَأُولَـٰئِكَ أَتُوبُ عَلَيْهِمْ ۚ وَأَنَا التَّوَّابُ الرَّحِيمُ',
            'english'       => 'Except for those who repent and correct themselves and make evident [what they concealed]. Those - I will accept their repentance, and I am the Accepting of repentance, the Merciful.',
            'bangla'        => 'তারা ছাড়া যারা তওবা করে ও সংশোধন করে, আর প্রকাশ করে, তাহলে তারাই! -- তাদের প্রতি আমি ফিরি আর আমি বারবার ফিরি, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 161,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'إِنَّ الَّذِينَ كَفَرُوا وَمَاتُوا وَهُمْ كُفَّارٌ أُولَـٰئِكَ عَلَيْهِمْ لَعْنَةُ اللَّهِ وَالْمَلَائِكَةِ وَالنَّاسِ أَجْمَعِينَ',
            'english'       => 'Indeed, those who disbelieve and die while they are disbelievers - upon them will be the curse of Allah and of the angels and the people, all together,',
            'bangla'        => 'অবশ্য যারা অবিশ্বাস পোষণ করে আর মারা যায় তারা অবিশ্বাসী থাকা অবস্থায়, তাদের ক্ষেত্রে -- তাদের উপরে ধিক্কার হোক আল্লাহ্‌র, ও ফিরিশ্‌তাদের ও জনগণের সম্মিলিতভাবে, --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 162,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'خَالِدِينَ فِيهَا ۖ لَا يُخَفَّفُ عَنْهُمُ الْعَذَابُ وَلَا هُمْ يُنظَرُونَ',
            'english'       => 'Abiding eternally therein. The punishment will not be lightened for them, nor will they be reprieved.',
            'bangla'        => 'এতে তারা অবস্থান করবে। তাদের উপর থেকে যাতনা লাঘব করা হবে না, আর তারা বিরামও পাবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 163,
            'page_no'       => 24,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِلَـٰهُكُمْ إِلَـٰهٌ وَاحِدٌ ۖ لَّا إِلَـٰهَ إِلَّا هُوَ الرَّحْمَـٰنُ الرَّحِيمُ',
            'english'       => 'And your god is one God. There is no deity [worthy of worship] except Him, the Entirely Merciful, the Especially Merciful.',
            'bangla'        => 'আর তোমাদের উপাস্য একক খোদা, তিনি ছাড়া কোনো উপাস্য নেই, রহমান, রহীম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 164,
            'page_no'       => 25,
            'jaz_no'        => 2,
            'arabic'        => 'إِنَّ فِي خَلْقِ السَّمَاوَاتِ وَالْأَرْضِ وَاخْتِلَافِ اللَّيْلِ وَالنَّهَارِ وَالْفُلْكِ الَّتِي تَجْرِي فِي الْبَحْرِ بِمَا يَنفَعُ النَّاسَ وَمَا أَنزَلَ اللَّهُ مِنَ السَّمَاءِ مِن مَّاءٍ فَأَحْيَا بِهِ الْأَرْضَ بَعْدَ مَوْتِهَا وَبَثَّ فِيهَا مِن كُلِّ دَابَّةٍ وَتَصْرِيفِ الرِّيَاحِ وَالسَّحَابِ الْمُسَخَّرِ بَيْنَ السَّمَاءِ وَالْأَرْضِ لَآيَاتٍ لِّقَوْمٍ يَعْقِلُونَ',
            'english'       => 'Indeed, in the creation of the heavens and earth, and the alternation of the night and the day, and the [great] ships which sail through the sea with that which benefits people, and what Allah has sent down from the heavens of rain, giving life thereby to the earth after its lifelessness and dispersing therein every [kind of] moving creature, and [His] directing of the winds and the clouds controlled between the heaven and the earth are signs for a people who use reason.',
            'bangla'        => 'নিঃসন্দেহ মহাকাশমন্ডল ও পৃথিবীর সৃষ্টির মধ্যে, আর রাত ও দিনের বিবর্তনে, আর জাহাজে -- যা সাগরের মাঝে চলাচল করে যার দ্বারা মানুষের মুনাফা হয় তার মধ্যে, আর আল্লাহ্ আকাশ থেকে বৃষ্টির যা-কিছু পাঠান তাতে, তারপর তার দ্বারা মাটিকে তার মরণের পরে প্রাণসঞ্চার করেন, আর তাতে ছড়িয়ে দেন হরেক রকমের জীবজন্ত, আর আকাশ ও পৃথিবীর মাঝে নিয়ন্ত্রিত বাতাস ও মেঘের গতিবেগে বিশেষ নিদর্শন রয়েছে বিচার-বুদ্ধি থাকা লোকের জন্য।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 165,
            'page_no'       => 25,
            'jaz_no'        => 2,
            'arabic'        => 'وَمِنَ النَّاسِ مَن يَتَّخِذُ مِن دُونِ اللَّهِ أَندَادًا يُحِبُّونَهُمْ كَحُبِّ اللَّهِ ۖ وَالَّذِينَ آمَنُوا أَشَدُّ حُبًّا لِّلَّهِ ۗ وَلَوْ يَرَى الَّذِينَ ظَلَمُوا إِذْ يَرَوْنَ الْعَذَابَ أَنَّ الْقُوَّةَ لِلَّهِ جَمِيعًا وَأَنَّ اللَّهَ شَدِيدُ الْعَذَابِ',
            'english'       => 'And [yet], among the people are those who take other than Allah as equals [to Him]. They love them as they [should] love Allah. But those who believe are stronger in love for Allah. And if only they who have wronged would consider [that] when they see the punishment, [they will be certain] that all power belongs to Allah and that Allah is severe in punishment.',
            'bangla'        => 'আর মানুষের মাঝে কেউ-কেউ আল্লাহ্‌কে ছেড়ে অন্যকে মুরব্বী বলে গ্রহণ করে, তারা তাদের ভালোবাসে আল্লাহ্‌কে ভালোবাসার ন্যায়। তবে যারা ঈমান এনেছে আল্লাহ্‌র প্রতি তাদের ভালোবাসা প্রবলতর। আফসোস! যারা অন্যায় করে তারা যদি দেখতো -- যখন শাস্তি তারা দেখতে পায়, তখন সমস্ত ক্ষমতা পুরোপুরিভাবে আল্লাহ্‌র, আর আল্লাহ্ নিঃসন্দেহ শাস্তি দিতে কঠোর।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 166,
            'page_no'       => 25,
            'jaz_no'        => 2,
            'arabic'        => 'إِذْ تَبَرَّأَ الَّذِينَ اتُّبِعُوا مِنَ الَّذِينَ اتَّبَعُوا وَرَأَوُا الْعَذَابَ وَتَقَطَّعَتْ بِهِمُ الْأَسْبَابُ',
            'english'       => '[And they should consider that] when those who have been followed disassociate themselves from those who followed [them], and they [all] see the punishment, and cut off from them are the ties [of relationship],',
            'bangla'        => 'চেয়ে দেখো! যাদের অনুসরণ করা হতো তারা যারা অনুসরণ করেছিল তাদের অস্বীকার করবে, আর তারা দেখতে পাবে শাস্তি, আর তাদের মধ্যেকার সম্পর্ক ছিন্ন হয়ে যাবে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 167,
            'page_no'       => 25,
            'jaz_no'        => 2,
            'arabic'        => 'وَقَالَ الَّذِينَ اتَّبَعُوا لَوْ أَنَّ لَنَا كَرَّةً فَنَتَبَرَّأَ مِنْهُمْ كَمَا تَبَرَّءُوا مِنَّا ۗ كَذَٰلِكَ يُرِيهِمُ اللَّهُ أَعْمَالَهُمْ حَسَرَاتٍ عَلَيْهِمْ ۖ وَمَا هُم بِخَارِجِينَ مِنَ النَّارِ',
            'english'       => 'Those who followed will say, "If only we had another turn [at worldly life] so we could disassociate ourselves from them as they have disassociated themselves from us." Thus will Allah show them their deeds as regrets upon them. And they are never to emerge from the Fire.',
            'bangla'        => 'আর যারা অনুসরণ করেছিল তারা বলবে -- \'\'হায়, আমরা যদি ফেরত পালা পেতাম তাহলে আমরা তাদের থেকে বিচ্ছিন্ন করতাম, যেমন তারা আমাদের থেকে বিচ্ছিন্ন করেছে।’’ এইভাবে আল্লাহ্ তাদের ক্রিয়াকলাপ তাদের দেখান তাদের জন্য তীব্র আক্ষেপরূপে। আর তারা আগুন থেকে বহিষ্কৃত হবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 168,
            'page_no'       => 25,
            'jaz_no'        => 2,
            'arabic'        => 'يَا أَيُّهَا النَّاسُ كُلُوا مِمَّا فِي الْأَرْضِ حَلَالًا طَيِّبًا وَلَا تَتَّبِعُوا خُطُوَاتِ الشَّيْطَانِ ۚ إِنَّهُ لَكُمْ عَدُوٌّ مُّبِينٌ',
            'english'       => 'O mankind, eat from whatever is on earth [that is] lawful and good and do not follow the footsteps of Satan. Indeed, he is to you a clear enemy.',
            'bangla'        => 'ওহে মানবজাতি! পৃথিবীতে যা-কিছু হালাল ও পবিত্র আছে তা থেকে পানাহার করো, আর শয়তানের পদচিহ্ন অনুসরণ করো না। নিঃসন্দেহ সে তোমাদের জন্য প্রকাশ্য শত্রু।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 169,
            'page_no'       => 25,
            'jaz_no'        => 2,
            'arabic'        => 'إِنَّمَا يَأْمُرُكُم بِالسُّوءِ وَالْفَحْشَاءِ وَأَن تَقُولُوا عَلَى اللَّهِ مَا لَا تَعْلَمُونَ',
            'english'       => 'He only orders you to evil and immorality and to say about Allah what you do not know.',
            'bangla'        => 'সে তোমাদের কেবল প্ররোচনা দেয় মন্দ ও অশালীনতার প্রতি, আর আল্লাহ্‌র বিরুদ্ধে তাই বলতে যা তোমরা জানো না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 170,
            'page_no'       => 26,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِذَا قِيلَ لَهُمُ اتَّبِعُوا مَا أَنزَلَ اللَّهُ قَالُوا بَلْ نَتَّبِعُ مَا أَلْفَيْنَا عَلَيْهِ آبَاءَنَا ۗ أَوَلَوْ كَانَ آبَاؤُهُمْ لَا يَعْقِلُونَ شَيْئًا وَلَا يَهْتَدُونَ',
            'english'       => 'And when it is said to them, "Follow what Allah has revealed," they say, "Rather, we will follow that which we found our fathers doing." Even though their fathers understood nothing, nor were they guided?',
            'bangla'        => 'আর যখন তাদের বলা হয় -- \'\'অনুসরণ করো যা প্রত্যাদেশ আল্লাহ্ অবতারণ করেছেন’’, তারা বলে -- \'\'না, আমরা অনুসরণ করি তার যার উপরে আমাদের পিতৃপুরুষদের দেখেছি।’’ কি! যদিও তাদের পিতৃপুরুষদের বুদ্ধিবিবেচনা কিছুই ছিল না, আর তারা পথনির্দেশ গ্রহণ করে নি?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 171,
            'page_no'       => 26,
            'jaz_no'        => 2,
            'arabic'        => 'وَمَثَلُ الَّذِينَ كَفَرُوا كَمَثَلِ الَّذِي يَنْعِقُ بِمَا لَا يَسْمَعُ إِلَّا دُعَاءً وَنِدَاءً ۚ صُمٌّ بُكْمٌ عُمْيٌ فَهُمْ لَا يَعْقِلُونَ',
            'english'       => 'The example of those who disbelieve is like that of one who shouts at what hears nothing but calls and cries cattle or sheep - deaf, dumb and blind, so they do not understand.',
            'bangla'        => 'আর যারা অবিশ্বাস পোষণ করে তাদের উপমা হচ্ছে তার দৃষ্টান্তের মতো যে ডাক দেয় এমন কতককে যে আওয়াজ ও চেচাঁমেচি ছাড়া আর কিছু শোনে না। বধিরতা, বোবা, অন্ধত্ব, কাজেই তারা বুঝে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 172,
            'page_no'       => 26,
            'jaz_no'        => 2,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا كُلُوا مِن طَيِّبَاتِ مَا رَزَقْنَاكُمْ وَاشْكُرُوا لِلَّهِ إِن كُنتُمْ إِيَّاهُ تَعْبُدُونَ',
            'english'       => 'O you who have believed, eat from the good things which We have provided for you and be grateful to Allah if it is [indeed] Him that you worship.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! পবিত্র জিনিস থেকে পানাহার করো যা তোমাদের খেতে দিয়েছি, আর আল্লাহ্‌কে ধন্যবাদ দাও, যদি তোমরা তাঁরই এবাদত করো।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 173,
            'page_no'       => 26,
            'jaz_no'        => 2,
            'arabic'        => 'إِنَّمَا حَرَّمَ عَلَيْكُمُ الْمَيْتَةَ وَالدَّمَ وَلَحْمَ الْخِنزِيرِ وَمَا أُهِلَّ بِهِ لِغَيْرِ اللَّهِ ۖ فَمَنِ اضْطُرَّ غَيْرَ بَاغٍ وَلَا عَادٍ فَلَا إِثْمَ عَلَيْهِ ۚ إِنَّ اللَّهَ غَفُورٌ رَّحِيمٌ',
            'english'       => 'He has only forbidden to you dead animals, blood, the flesh of swine, and that which has been dedicated to other than Allah. But whoever is forced [by necessity], neither desiring [it] nor transgressing [its limit], there is no sin upon him. Indeed, Allah is Forgiving and Merciful.',
            'bangla'        => 'তিনি তোমাদের কারণে নিষেধ করেছেন কেবল যা নিজে মারা গেছে, আর রক্ত, আর শূকরের মাংস, আর যার উপরে আল্লাহ্ ছাড়া অন্য নাম উচ্চারিত হয়েছে। কিন্তু যে চাপে পড়েছে, অবাধ্য হয় নি বা মাত্রা ছাড়ায় নি, তার উপরে কোনো পাপ হবে না। নিঃসন্দেহ আল্লাহ্ ত্রাণকর্তা, অফুরন্ত ফলদাতা!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 174,
            'page_no'       => 26,
            'jaz_no'        => 2,
            'arabic'        => 'إِنَّ الَّذِينَ يَكْتُمُونَ مَا أَنزَلَ اللَّهُ مِنَ الْكِتَابِ وَيَشْتَرُونَ بِهِ ثَمَنًا قَلِيلًا ۙ أُولَـٰئِكَ مَا يَأْكُلُونَ فِي بُطُونِهِمْ إِلَّا النَّارَ وَلَا يُكَلِّمُهُمُ اللَّهُ يَوْمَ الْقِيَامَةِ وَلَا يُزَكِّيهِمْ وَلَهُمْ عَذَابٌ أَلِيمٌ',
            'english'       => 'Indeed, they who conceal what Allah has sent down of the Book and exchange it for a small price - those consume not into their bellies except the Fire. And Allah will not speak to them on the Day of Resurrection, nor will He purify them. And they will have a painful punishment.',
            'bangla'        => 'অবশ্যই যারা ধর্মগ্রন্থের মধ্যে থেকে আল্লাহ্ যা নাযিল করেছেন তা লুকিয়ে রাখে আর এর দ্বারা তুচ্ছ বস্তু কিনে নেয়, -- এরাই তাদের পেটে আগুন ছাড়া আর কিছু গেলে না, আর কিয়ামতের দিন আল্লাহ্ তাদের সাথে কথাবার্তা বলবেন না, বা তাদের শুদ্ধও করবেন না, আর তাদের জন্য রয়েছে ব্যথাদায়ক শাস্তি।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 175,
            'page_no'       => 26,
            'jaz_no'        => 2,
            'arabic'        => 'أُولَـٰئِكَ الَّذِينَ اشْتَرَوُا الضَّلَالَةَ بِالْهُدَىٰ وَالْعَذَابَ بِالْمَغْفِرَةِ ۚ فَمَا أَصْبَرَهُمْ عَلَى النَّارِ',
            'english'       => 'Those are the ones who have exchanged guidance for error and forgiveness for punishment. How patient they are in pursuit of the Fire!',
            'bangla'        => 'এরাই তারা যারা কিনে নেয় হেদায়তের বিনিময়ে ভ্রান্তপথ ও পরিত্রাণের পরিবর্তে শাস্তি। কাজেই কতো তাদের ধৈর্য আগুনের প্রতি!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 176,
            'page_no'       => 26,
            'jaz_no'        => 2,
            'arabic'        => 'ذَٰلِكَ بِأَنَّ اللَّهَ نَزَّلَ الْكِتَابَ بِالْحَقِّ ۗ وَإِنَّ الَّذِينَ اخْتَلَفُوا فِي الْكِتَابِ لَفِي شِقَاقٍ بَعِيدٍ',
            'english'       => 'That is [deserved by them] because Allah has sent down the Book in truth. And indeed, those who differ over the Book are in extreme dissension.',
            'bangla'        => 'তা-ই! কারণ আল্লাহ্ গ্রন্থখানা নাযিল করেছেন সত্যের সাথে। আর যারা গ্রন্থখানার মতবিরোধ করে তারা নিঃসন্দেহ একগুঁয়েমিতে বহুদূর পৌঁছেছে'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 177,
            'page_no'       => 27,
            'jaz_no'        => 2,
            'arabic'        => 'لَّيْسَ الْبِرَّ أَن تُوَلُّوا وُجُوهَكُمْ قِبَلَ الْمَشْرِقِ وَالْمَغْرِبِ وَلَـٰكِنَّ الْبِرَّ مَنْ آمَنَ بِاللَّهِ وَالْيَوْمِ الْآخِرِ وَالْمَلَائِكَةِ وَالْكِتَابِ وَالنَّبِيِّينَ وَآتَى الْمَالَ عَلَىٰ حُبِّهِ ذَوِي الْقُرْبَىٰ وَالْيَتَامَىٰ وَالْمَسَاكِينَ وَابْنَ السَّبِيلِ وَالسَّائِلِينَ وَفِي الرِّقَابِ وَأَقَامَ الصَّلَاةَ وَآتَى الزَّكَاةَ وَالْمُوفُونَ بِعَهْدِهِمْ إِذَا عَاهَدُوا ۖ وَالصَّابِرِينَ فِي الْبَأْسَاءِ وَالضَّرَّاءِ وَحِينَ الْبَأْسِ ۗ أُولَـٰئِكَ الَّذِينَ صَدَقُوا ۖ وَأُولَـٰئِكَ هُمُ الْمُتَّقُونَ',
            'english'       => 'Righteousness is not that you turn your faces toward the east or the west, but [true] righteousness is [in] one who believes in Allah, the Last Day, the angels, the Book, and the prophets and gives wealth, in spite of love for it, to relatives, orphans, the needy, the traveler, those who ask [for help], and for freeing slaves; [and who] establishes prayer and gives zakah; [those who] fulfill their promise when they promise; and [those who] are patient in poverty and hardship and during battle. Those are the ones who have been true, and it is those who are the righteous.',
            'bangla'        => 'ধার্মিকতা তাতে নয় যে তোমাদের মুখ পূব বা পশ্চিম দিকে ফেরাও, তবে ধর্মনিষ্ঠা হচ্ছে যে আল্লাহর প্রতি ঈমান আনে, আর আখেরাতের দিনের প্রতি, আর ফিরিশ্‌তাদের প্রতি, আর গ্রন্থখানিতে, আর নবীদের প্রতি; আর যে তাঁর প্রতি মহব্বত বশতঃ ধন দান করে আ‌ত্মীয়-স্বজনদের, আর এতীমদের, আর মিসকিনদের, আর পথচারীদের, আর ভিখারীদের, আর দাসদের মুক্তিপণ বাবদ, আর যে নামায কায়েম করে ও যাকাত আদায় করেচ আর যারা প্রতিজ্ঞা করার পরে তাদের ওয়াদা রক্ষা করে, আর অভাব-অনটনে ও আপৎকালে ও আতঙ্কের সময়ে ধৈর্যশীলদের। এরাই তারা যারা সত্যনিষ্ঠ, আর এরা নিজেরাই ধর্মপরায়ণ।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 178,
            'page_no'       => 27,
            'jaz_no'        => 2,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا كُتِبَ عَلَيْكُمُ الْقِصَاصُ فِي الْقَتْلَى ۖ الْحُرُّ بِالْحُرِّ وَالْعَبْدُ بِالْعَبْدِ وَالْأُنثَىٰ بِالْأُنثَىٰ ۚ فَمَنْ عُفِيَ لَهُ مِنْ أَخِيهِ شَيْءٌ فَاتِّبَاعٌ بِالْمَعْرُوفِ وَأَدَاءٌ إِلَيْهِ بِإِحْسَانٍ ۗ ذَٰلِكَ تَخْفِيفٌ مِّن رَّبِّكُمْ وَرَحْمَةٌ ۗ فَمَنِ اعْتَدَىٰ بَعْدَ ذَٰلِكَ فَلَهُ عَذَابٌ أَلِيمٌ',
            'english'       => 'O you who have believed, prescribed for you is legal retribution for those murdered - the free for the free, the slave for the slave, and the female for the female. But whoever overlooks from his brother anything, then there should be a suitable follow-up and payment to him with good conduct. This is an alleviation from your Lord and a mercy. But whoever transgresses after that will have a painful punishment.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! তোমাদের প্রতি হত্যার ক্ষেত্রে প্রতিশোধের বিধান দেয়া হয়েছে। স্বাধীন ব্যক্তির উপরে স্বাধীন ব্যক্তির ক্ষেত্রে, আর দাসের উপরে দাসের ক্ষেত্রে, আর নারীর উপরে নারীর ক্ষেত্রে। তবে যাকে কিছুটা রেহাই দেয়া হয় তার ভাইয়ের তরফ হতে, তাহলে বিচার হবে ন্যায্যভাবে, আর তার প্রতি ক্ষতিপূরণ দিতে হবে উদারভাবে। -- এটি তোমাদের প্রভুর কাছ থেকে লঘু-ব্যবস্থা ও করুণা। কাজেই এরপরে যে সীমালঙ্ঘন করবে তার জন্য রয়েছে ব্যথাদায়ক শাস্তি।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 179,
            'page_no'       => 27,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَكُمْ فِي الْقِصَاصِ حَيَاةٌ يَا أُولِي الْأَلْبَابِ لَعَلَّكُمْ تَتَّقُونَ',
            'english'       => 'And there is for you in legal retribution [saving of] life, O you [people] of understanding, that you may become righteous.',
            'bangla'        => 'আর তোমাদের জন্য প্রতিশোধের বিধানে রয়েছে জীবন, হে জ্ঞানবান ব্যক্তিগণ! যাতে তোমরা ধর্মপরায়ণতা অবলন্বন করো।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 180,
            'page_no'       => 27,
            'jaz_no'        => 2,
            'arabic'        => 'كُتِبَ عَلَيْكُمْ إِذَا حَضَرَ أَحَدَكُمُ الْمَوْتُ إِن تَرَكَ خَيْرًا الْوَصِيَّةُ لِلْوَالِدَيْنِ وَالْأَقْرَبِينَ بِالْمَعْرُوفِ ۖ حَقًّا عَلَى الْمُتَّقِينَ',
            'english'       => 'Prescribed for you when death approaches [any] one of you if he leaves wealth [is that he should make] a bequest for the parents and near relatives according to what is acceptable - a duty upon the righteous.',
            'bangla'        => 'তোমাদের জন্য বিধিবদ্ধ করা গেল যে যখন তোমাদের কারোর কাছে মৃত্যু হাজির হয় সে ধন ছেড়ে যাচ্ছে, তবে যেন ওসিয়ৎ করা হয় মাতাপিতা ও নিকটা‌ত্মীয়দের জন্য ন্যায়সঙ্গত-ভাবে; এটা মুত্তকীদের উপরে একটি কর্তব্য।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 181,
            'page_no'       => 27,
            'jaz_no'        => 2,
            'arabic'        => 'فَمَن بَدَّلَهُ بَعْدَ مَا سَمِعَهُ فَإِنَّمَا إِثْمُهُ عَلَى الَّذِينَ يُبَدِّلُونَهُ ۚ إِنَّ اللَّهَ سَمِيعٌ عَلِيمٌ',
            'english'       => 'Then whoever alters the bequest after he has heard it - the sin is only upon those who have altered it. Indeed, Allah is Hearing and Knowing.',
            'bangla'        => 'আর যে কেউ এটি বদলে ফেলে তা শোনার পরেও, তা হলে তার পাপ বর্তাবে তাদের উপরে যারা এটি বদলাবে। নিঃসন্দেহ আল্লাহ্ সর্বশ্রোতা, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 182,
            'page_no'       => 28,
            'jaz_no'        => 2,
            'arabic'        => 'فَمَنْ خَافَ مِن مُّوصٍ جَنَفًا أَوْ إِثْمًا فَأَصْلَحَ بَيْنَهُمْ فَلَا إِثْمَ عَلَيْهِ ۚ إِنَّ اللَّهَ غَفُورٌ رَّحِيمٌ',
            'english'       => 'But if one fears from the bequeather [some] error or sin and corrects that which is between them, there is no sin upon him. Indeed, Allah is Forgiving and Merciful.',
            'bangla'        => 'কিন্তু যদি কেউ আশংকা করে যে ওসিয়ৎকারীর তরফ থেকে ভুল বা অন্যায় হচ্ছে, কাজেই তাদের মধ্যে বোঝাপড়া করে, তাহলে তার উপরে কোনো দোষ হবে না। নিঃসন্দেহ আল্লাহ্ ত্রাণকর্তা, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 183,
            'page_no'       => 28,
            'jaz_no'        => 2,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا كُتِبَ عَلَيْكُمُ الصِّيَامُ كَمَا كُتِبَ عَلَى الَّذِينَ مِن قَبْلِكُمْ لَعَلَّكُمْ تَتَّقُونَ',
            'english'       => 'O you who have believed, decreed upon you is fasting as it was decreed upon those before you that you may become righteous -',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! তোমাদের উপরে রোযা বিধিবদ্ধ করা গেল যেমন বিধান করা হয়েছিল যারা তোমাদের আগে এসেছে তাদের উপরে, যাতে তোমরা ধর্মভীরুতা অবলন্বন করো, --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 184,
            'page_no'       => 28,
            'jaz_no'        => 2,
            'arabic'        => 'أَيَّامًا مَّعْدُودَاتٍ ۚ فَمَن كَانَ مِنكُم مَّرِيضًا أَوْ عَلَىٰ سَفَرٍ فَعِدَّةٌ مِّنْ أَيَّامٍ أُخَرَ ۚ وَعَلَى الَّذِينَ يُطِيقُونَهُ فِدْيَةٌ طَعَامُ مِسْكِينٍ ۖ فَمَن تَطَوَّعَ خَيْرًا فَهُوَ خَيْرٌ لَّهُ ۚ وَأَن تَصُومُوا خَيْرٌ لَّكُمْ ۖ إِن كُنتُمْ تَعْلَمُونَ',
            'english'       => '[Fasting for] a limited number of days. So whoever among you is ill or on a journey [during them] - then an equal number of days [are to be made up]. And upon those who are able [to fast, but with hardship] - a ransom [as substitute] of feeding a poor person [each day]. And whoever volunteers excess - it is better for him. But to fast is best for you, if you only knew.',
            'bangla'        => 'নির্দিষ্টসংখ্যক দিনের জন্য। কিন্তু তোমাদের মধ্যে যে কেউ অসুস্থ অথবা সফরে আছে সে সেই সংখ্যক অন্য দিন-গুলোতে। আর যারা এ অতি কষ্টসাধ্য বোধ করে -- প্রতিবিধান হল একজন মিসকিনকে খাওয়ানো। কিন্তু যে কেউ স্বতঃপ্রবৃত্ত হয়ে ভালো কাজ করে, সেটি তার জন্য ভালো। আর যদি তোমরা রোযা রাখো তবে তোমাদের জন্য অতি উত্তম, -- যদি তোমরা জানতে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 185,
            'page_no'       => 28,
            'jaz_no'        => 2,
            'arabic'        => 'شَهْرُ رَمَضَانَ الَّذِي أُنزِلَ فِيهِ الْقُرْآنُ هُدًى لِّلنَّاسِ وَبَيِّنَاتٍ مِّنَ الْهُدَىٰ وَالْفُرْقَانِ ۚ فَمَن شَهِدَ مِنكُمُ الشَّهْرَ فَلْيَصُمْهُ ۖ وَمَن كَانَ مَرِيضًا أَوْ عَلَىٰ سَفَرٍ فَعِدَّةٌ مِّنْ أَيَّامٍ أُخَرَ ۗ يُرِيدُ اللَّهُ بِكُمُ الْيُسْرَ وَلَا يُرِيدُ بِكُمُ الْعُسْرَ وَلِتُكْمِلُوا الْعِدَّةَ وَلِتُكَبِّرُوا اللَّهَ عَلَىٰ مَا هَدَاكُمْ وَلَعَلَّكُمْ تَشْكُرُونَ',
            'english'       => 'The month of Ramadhan [is that] in which was revealed the Qur\'an, a guidance for the people and clear proofs of guidance and criterion. So whoever sights [the new moon of] the month, let him fast it; and whoever is ill or on a journey - then an equal number of other days. Allah intends for you ease and does not intend for you hardship and [wants] for you to complete the period and to glorify Allah for that [to] which He has guided you; and perhaps you will be grateful.',
            'bangla'        => 'রমযান মাস এইটি যাতে কুরাআন নাযিল হয়েছিল, -- মানবগোষ্ঠীর জন্য পথপ্রদর্শক হিসেবে, আর পথনির্দেশের স্পষ্টপ্রমানরূপে, আর ফুরকান। কাজেই তোমাদের মধ্যে যে কেউ মাসটির দেখা পাবে সে যেন এতে রোযা রাখে। আর যে অসুস্থ বা সফরে আছে যে সেই সংখ্যক অন্য দিনগুলোতে। আল্লাহ্ তোমাদের জন্য সুবিধা চান, আর তিনি তোমাদের জন্য কষ্টকর অবস্থা চান না, আর তোমরা যেন এই সংখ্যা সম্পূর্ণ করো, আর যাতে আল্লাহ্‌র মহিমা কীর্তন করো তোমাদের যে পথনির্দেশ তিনি দিয়েছেন সেইজন্য, আর তোমরা যেন কৃতজ্ঞতা জ্ঞাপন করো।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 186,
            'page_no'       => 28,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِذَا سَأَلَكَ عِبَادِي عَنِّي فَإِنِّي قَرِيبٌ ۖ أُجِيبُ دَعْوَةَ الدَّاعِ إِذَا دَعَانِ ۖ فَلْيَسْتَجِيبُوا لِي وَلْيُؤْمِنُوا بِي لَعَلَّهُمْ يَرْشُدُونَ',
            'english'       => 'And when My servants ask you, [O Muhammad], concerning Me - indeed I am near. I respond to the invocation of the supplicant when he calls upon Me. So let them respond to Me [by obedience] and believe in Me that they may be [rightly] guided.',
            'bangla'        => 'আর যখন আমার বান্দারা আমার সন্বন্ধে তোমাকে জিজ্ঞাসা করে, তখন -- \'\'দেখো! আমি নিঃসন্দেহ অতি নিকটে।’’ আমি প্রার্থনাকারীর প্রার্থনার জবাব দিই যখনি সে আমাকে আহ্বান করে। কাজেই তারা আমার প্রতি সাড়া দিক আর আমাতে ঈমান আনুক, -- যাতে তারা সুপথে চলতে পারে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 187,
            'page_no'       => 29,
            'jaz_no'        => 2,
            'arabic'        => 'أُحِلَّ لَكُمْ لَيْلَةَ الصِّيَامِ الرَّفَثُ إِلَىٰ نِسَائِكُمْ ۚ هُنَّ لِبَاسٌ لَّكُمْ وَأَنتُمْ لِبَاسٌ لَّهُنَّ ۗ عَلِمَ اللَّهُ أَنَّكُمْ كُنتُمْ تَخْتَانُونَ أَنفُسَكُمْ فَتَابَ عَلَيْكُمْ وَعَفَا عَنكُمْ ۖ فَالْآنَ بَاشِرُوهُنَّ وَابْتَغُوا مَا كَتَبَ اللَّهُ لَكُمْ ۚ وَكُلُوا وَاشْرَبُوا حَتَّىٰ يَتَبَيَّنَ لَكُمُ الْخَيْطُ الْأَبْيَضُ مِنَ الْخَيْطِ الْأَسْوَدِ مِنَ الْفَجْرِ ۖ ثُمَّ أَتِمُّوا الصِّيَامَ إِلَى اللَّيْلِ ۚ وَلَا تُبَاشِرُوهُنَّ وَأَنتُمْ عَاكِفُونَ فِي الْمَسَاجِدِ ۗ تِلْكَ حُدُودُ اللَّهِ فَلَا تَقْرَبُوهَا ۗ كَذَٰلِكَ يُبَيِّنُ اللَّهُ آيَاتِهِ لِلنَّاسِ لَعَلَّهُمْ يَتَّقُونَ',
            'english'       => 'It has been made permissible for you the night preceding fasting to go to your wives [for sexual relations]. They are clothing for you and you are clothing for them. Allah knows that you used to deceive yourselves, so He accepted your repentance and forgave you. So now, have relations with them and seek that which Allah has decreed for you. And eat and drink until the white thread of dawn becomes distinct to you from the black thread [of night]. Then complete the fast until the sunset. And do not have relations with them as long as you are staying for worship in the mosques. These are the limits [set by] Allah, so do not approach them. Thus does Allah make clear His ordinances to the people that they may become righteous.',
            'bangla'        => 'রোযার রাত্রে তোমাদের স্ত্রীদের কাছে গমন তোমাদের জন্য বৈধ করা গেল। তারা তোমাদের জন্য পোশাক আর তোমরা তাদের জন্য পোশাক। আল্লাহ্ জানেন যে তোমরা তোমাদের নিজেদের প্রবঞ্চনা করছিলে, তাই তিনি তোমাদের উপরে ফিরেছেন ও তোমাদের ভুলকে উপেক্ষা করেছেন। সুতরাং এখন তাদের সাহচর্য ভোগ করো, আর আল্লাহ্ তোমাদের জন্য যা নির্ধারিত করেছেন তা অনুসরণ করে চল। আর আহার করো ও পান করো যতক্ষণ না তোমাদের কাছে স্পষ্ট হয়ে ওঠে ভোরবেলাতে সাদা কিরণ কালো ছায়া থেকে, তারপর রোযা সম্পূর্ণ করো রাত্রি সমাগম পর্যন্ত। আর তাদের স্পর্শ করো না যখন তোমরা মসজিদে ই\'তিকাফ করো। এ হচ্ছে আল্লাহ্‌র সীমা, কাজেই সে-সবের নিকটে যেয়ো না। এইভাবে আল্লাহ্ তাঁর আয়াতসমূহ মানুষের জন্য সুস্পষ্ট করে দিয়েছেন যাতে তারা ধর্মপরায়ণতা অবলন্বন করে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 188,
            'page_no'       => 29,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَا تَأْكُلُوا أَمْوَالَكُم بَيْنَكُم بِالْبَاطِلِ وَتُدْلُوا بِهَا إِلَى الْحُكَّامِ لِتَأْكُلُوا فَرِيقًا مِّنْ أَمْوَالِ النَّاسِ بِالْإِثْمِ وَأَنتُمْ تَعْلَمُونَ',
            'english'       => 'And do not consume one another\'s wealth unjustly or send it [in bribery] to the rulers in order that [they might aid] you [to] consume a portion of the wealth of the people in sin, while you know [it is unlawful].',
            'bangla'        => 'আর তোমাদের সম্পত্তি পরস্পরের মধ্যে জালিয়াতি করে গ্রাস করো না, আর এগুলো বিচারকদের কাছে পেশ করো না যাতে লোকের সম্পত্তির কিছুটা অন্যায়ভাবে গিলে ফেলতে পারো, তাও তোমরা জেনেবুঝে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 189,
            'page_no'       => 29,
            'jaz_no'        => 2,
            'arabic'        => 'يَسْأَلُونَكَ عَنِ الْأَهِلَّةِ ۖ قُلْ هِيَ مَوَاقِيتُ لِلنَّاسِ وَالْحَجِّ ۗ وَلَيْسَ الْبِرُّ بِأَن تَأْتُوا الْبُيُوتَ مِن ظُهُورِهَا وَلَـٰكِنَّ الْبِرَّ مَنِ اتَّقَىٰ ۗ وَأْتُوا الْبُيُوتَ مِنْ أَبْوَابِهَا ۚ وَاتَّقُوا اللَّهَ لَعَلَّكُمْ تُفْلِحُونَ',
            'english'       => 'They ask you, [O Muhammad], about the new moons. Say, "They are measurements of time for the people and for Hajj." And it is not righteousness to enter houses from the back, but righteousness is [in] one who fears Allah. And enter houses from their doors. And fear Allah that you may succeed.',
            'bangla'        => 'তারা তোমাকে নতুন চাঁদ সন্বন্ধে জিজ্ঞাসা করছে। তুমি বলো -- \'\'এসব হচ্ছে নির্দিষ্ট সময় জনসাধারণের জন্য ও হজের জন্য।’’ আর ধার্মিকতা এ নয় যে তোমরা বাড়িতে প্রবেশ করবে তাদের পেছন দিক দিয়ে, বরং ধার্মিকতা হচ্ছে যে ধর্মভীরুতা অবলন্বন করে। তাই বাড়ীতে ঢোকো তাদের দরজা দিয়ে, আর আল্লাহ্‌তে ভয়-শ্রদ্ধা করো যেন তোমরা সফলকাম হতে পার।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 190,
            'page_no'       => 29,
            'jaz_no'        => 2,
            'arabic'        => 'وَقَاتِلُوا فِي سَبِيلِ اللَّهِ الَّذِينَ يُقَاتِلُونَكُمْ وَلَا تَعْتَدُوا ۚ إِنَّ اللَّهَ لَا يُحِبُّ الْمُعْتَدِينَ',
            'english'       => 'Fight in the way of Allah those who fight you but do not transgress. Indeed. Allah does not like transgressors.',
            'bangla'        => 'আর আল্লাহ্‌র পথে তোমরা যুদ্ধ করো তাদের বিরুদ্ধে যারা অন্যায়ভাবে তোমাদের সঙ্গে যুদ্ধ করে, আর সীমালংঘন করো না। নিঃসন্দেহ আল্লাহ্ সীমালংঘনকারীদের ভালোবাসেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 191,
            'page_no'       => 30,
            'jaz_no'        => 2,
            'arabic'        => 'وَاقْتُلُوهُمْ حَيْثُ ثَقِفْتُمُوهُمْ وَأَخْرِجُوهُم مِّنْ حَيْثُ أَخْرَجُوكُمْ ۚ وَالْفِتْنَةُ أَشَدُّ مِنَ الْقَتْلِ ۚ وَلَا تُقَاتِلُوهُمْ عِندَ الْمَسْجِدِ الْحَرَامِ حَتَّىٰ يُقَاتِلُوكُمْ فِيهِ ۖ فَإِن قَاتَلُوكُمْ فَاقْتُلُوهُمْ ۗ كَذَٰلِكَ جَزَاءُ الْكَافِرِينَ',
            'english'       => 'And kill them wherever you overtake them and expel them from wherever they have expelled you, and fitnah is worse than killing. And do not fight them at al-Masjid al- Haram until they fight you there. But if they fight you, then kill them. Such is the recompense of the disbelievers.',
            'bangla'        => 'আর তাদের হত্যা করো যেখানেই তোমারা তাদের দেখা পাও, আর তাদের তাড়িয়ে দাও যেখান থেকে তারা তোমাদের তাড়িয়ে দিয়েছিল, আর উৎপীড়ন যুদ্ধের চেয়ে নিকৃষ্টতর। কিন্তু তাদের হত্যা করো না পবিত্র-মসজিদের আশেপাশে যে পর্যন্ত না তারা সেখানে তোমাদের সঙ্গে যুদ্ধ করে, কাজেই তারা যদি তোমাদের সঙ্গে যুদ্ধ করে তবে তোমরাও তাদের সাথে লড়বে। এই হচ্ছে অবিশ্বাসীদের প্রাপ্য।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 192,
            'page_no'       => 30,
            'jaz_no'        => 2,
            'arabic'        => 'فَإِنِ انتَهَوْا فَإِنَّ اللَّهَ غَفُورٌ رَّحِيمٌ',
            'english'       => 'And if they cease, then indeed, Allah is Forgiving and Merciful.',
            'bangla'        => 'কিন্তু তারা যদি ক্ষান্ত হয় তবে আল্লাহ্ নিঃসন্দেহ ত্রাণকর্তা, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 193,
            'page_no'       => 30,
            'jaz_no'        => 2,
            'arabic'        => 'وَقَاتِلُوهُمْ حَتَّىٰ لَا تَكُونَ فِتْنَةٌ وَيَكُونَ الدِّينُ لِلَّهِ ۖ فَإِنِ انتَهَوْا فَلَا عُدْوَانَ إِلَّا عَلَى الظَّالِمِينَ',
            'english'       => 'Fight them until there is no [more] fitnah and [until] worship is [acknowledged to be] for Allah. But if they cease, then there is to be no aggression except against the oppressors.',
            'bangla'        => 'আর তাদের সাথে লড়বে যে পর্যন্ত না উৎপীড়ন বন্ধ হয়, আর ধর্ম হচ্ছে আল্লাহ্‌র জন্য। সুতরাং তারা যদি ক্ষান্ত হয় তবে যুদ্ধ-বিগ্রহ চলবে না শুধু অত্যাচারীদের সাথে ছাড়া।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 194,
            'page_no'       => 30,
            'jaz_no'        => 2,
            'arabic'        => 'الشَّهْرُ الْحَرَامُ بِالشَّهْرِ الْحَرَامِ وَالْحُرُمَاتُ قِصَاصٌ ۚ فَمَنِ اعْتَدَىٰ عَلَيْكُمْ فَاعْتَدُوا عَلَيْهِ بِمِثْلِ مَا اعْتَدَىٰ عَلَيْكُمْ ۚ وَاتَّقُوا اللَّهَ وَاعْلَمُوا أَنَّ اللَّهَ مَعَ الْمُتَّقِينَ',
            'english'       => '[Fighting in] the sacred month is for [aggression committed in] the sacred month, and for [all] violations is legal retribution. So whoever has assaulted you, then assault him in the same way that he has assaulted you. And fear Allah and know that Allah is with those who fear Him.',
            'bangla'        => 'পবিত্র মাস পবিত্র মাসের খাতিরে, আর সব নিষিদ্ধ ব্যাপারে প্রতিশোধ নিতে হবে। কাজেই যে কেউ তোমাদের উপরে আক্রমণ চালায়, তোমরাও তবে তাদের উপরে আঘাত হানবে সেইভাবে যেমনটা তারা তোমাদের উপরে আঘাত করেছিল। আর আল্লাহ্‌কে ভয়-শ্রদ্ধা করবে, আর জেনে রেখো নিঃসন্দেহ আল্লাহ্ ধর্মভীরুদের সাথে আছেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 195,
            'page_no'       => 30,
            'jaz_no'        => 2,
            'arabic'        => 'وَأَنفِقُوا فِي سَبِيلِ اللَّهِ وَلَا تُلْقُوا بِأَيْدِيكُمْ إِلَى التَّهْلُكَةِ ۛ وَأَحْسِنُوا ۛ إِنَّ اللَّهَ يُحِبُّ الْمُحْسِنِينَ',
            'english'       => 'And spend in the way of Allah and do not throw [yourselves] with your [own] hands into destruction [by refraining]. And do good; indeed, Allah loves the doers of good.',
            'bangla'        => 'আর আল্লাহ্‌র রাস্তায় খরচ করো, আর তোমাদের নিজহাতে তোমাদের ধ্বংসের মধ্যে ফেলো না, বরং ভালো করো, নিঃসন্দেহ আল্লাহ্ মঙ্গলকারীদের ভালোবাসেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 196,
            'page_no'       => 30,
            'jaz_no'        => 2,
            'arabic'        => 'وَأَتِمُّوا الْحَجَّ وَالْعُمْرَةَ لِلَّهِ ۚ فَإِنْ أُحْصِرْتُمْ فَمَا اسْتَيْسَرَ مِنَ الْهَدْيِ ۖ وَلَا تَحْلِقُوا رُءُوسَكُمْ حَتَّىٰ يَبْلُغَ الْهَدْيُ مَحِلَّهُ ۚ فَمَن كَانَ مِنكُم مَّرِيضًا أَوْ بِهِ أَذًى مِّن رَّأْسِهِ فَفِدْيَةٌ مِّن صِيَامٍ أَوْ صَدَقَةٍ أَوْ نُسُكٍ ۚ فَإِذَا أَمِنتُمْ فَمَن تَمَتَّعَ بِالْعُمْرَةِ إِلَى الْحَجِّ فَمَا اسْتَيْسَرَ مِنَ الْهَدْيِ ۚ فَمَن لَّمْ يَجِدْ فَصِيَامُ ثَلَاثَةِ أَيَّامٍ فِي الْحَجِّ وَسَبْعَةٍ إِذَا رَجَعْتُمْ ۗ تِلْكَ عَشَرَةٌ كَامِلَةٌ ۗ ذَٰلِكَ لِمَن لَّمْ يَكُنْ أَهْلُهُ حَاضِرِي الْمَسْجِدِ الْحَرَامِ ۚ وَاتَّقُوا اللَّهَ وَاعْلَمُوا أَنَّ اللَّهَ شَدِيدُ الْعِقَابِ',
            'english'       => 'And complete the Hajj and \'umrah for Allah. But if you are prevented, then [offer] what can be obtained with ease of sacrificial animals. And do not shave your heads until the sacrificial animal has reached its place of slaughter. And whoever among you is ill or has an ailment of the head [making shaving necessary must offer] a ransom of fasting [three days] or charity or sacrifice. And when you are secure, then whoever performs \'umrah [during the Hajj months] followed by Hajj [offers] what can be obtained with ease of sacrificial animals. And whoever cannot find [or afford such an animal] - then a fast of three days during Hajj and of seven when you have returned [home]. Those are ten complete [days]. This is for those whose family is not in the area of al-Masjid al-Haram. And fear Allah and know that Allah is severe in penalty.',
            'bangla'        => 'আর আল্লাহ্‌র জন্য সম্পূর্ণ করো হজ এবং উমরাহ। কিন্তু যদি বাধা পাও, তবে কুরবানির যা-কিছু পাওয়া যায় তাই, আর তোমাদের মাথা কামাবে না যতক্ষণ না কুরবানি তার গন্তব্যস্থানে পৌঁছেছে কিন্তু তোমাদের মধ্যে যদি কেউ অসুস্থ হয় অথবা তার মাথায় রোগ থাকে, তবে প্রতিবিধান হচ্ছে রোযা রেখে বা সদকা দিয়ে বা কুরবানি ক’রে। কিন্তু যখন তোমরা নিরাপদ বোধ করবে তখন যে উমরাহ্‌কে হজের সঙ্গে সংযোজন ক’রে লাভবান হতে চায়, সে যেন কুরবানির যা-কিছু পায় তাই। কিন্তু যে পায় না, রোযা হচ্ছে হজের সময়ে তিনদিন আর তোমরা যখন ফিরে এস তখন সাত, -- এই হলো পুরো দশ। এটা তার জন্য যার পরিবার পবিত্র- মজজিদে হাজির থাকে না। আর আল্লাহ্‌কে ভয়-ভক্তি করো, আর জেনে রেখো যে নিঃসন্দেহ আল্লাহ্ প্রতিফলদানে কঠোর।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 197,
            'page_no'       => 31,
            'jaz_no'        => 2,
            'arabic'        => 'الْحَجُّ أَشْهُرٌ مَّعْلُومَاتٌ ۚ فَمَن فَرَضَ فِيهِنَّ الْحَجَّ فَلَا رَفَثَ وَلَا فُسُوقَ وَلَا جِدَالَ فِي الْحَجِّ ۗ وَمَا تَفْعَلُوا مِنْ خَيْرٍ يَعْلَمْهُ اللَّهُ ۗ وَتَزَوَّدُوا فَإِنَّ خَيْرَ الزَّادِ التَّقْوَىٰ ۚ وَاتَّقُونِ يَا أُولِي الْأَلْبَابِ',
            'english'       => 'Hajj is [during] well-known months, so whoever has made Hajj obligatory upon himself therein [by entering the state of ihram], there is [to be for him] no sexual relations and no disobedience and no disputing during Hajj. And whatever good you do - Allah knows it. And take provisions, but indeed, the best provision is fear of Allah. And fear Me, O you of understanding.',
            'bangla'        => 'হজ হয় কয়েকটি সুবিখ্যাত মাসে, কাজেই যে কেউ এই সময়ে হজ করার সংকল্প করে তার জন্য এ-সবের মধ্যে স্ত্রী-গমন বা দুষ্টামি থাকবে না, বা হজের মধ্যে তর্কাতর্কি চলবে না। আর ভালো যা-কিছু তোমরা কর, আল্লাহ্ তা জানেন। আর পাথেয় সংগ্রহ করো, নিঃসন্দেহ শ্রেষ্ঠ পাথেয় হচ্ছে ধর্মপরায়ণতা। অতএব আমাকে ভয়-শ্রদ্ধা করো, হে জ্ঞানের অধিকারীসব!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 198,
            'page_no'       => 31,
            'jaz_no'        => 2,
            'arabic'        => 'لَيْسَ عَلَيْكُمْ جُنَاحٌ أَن تَبْتَغُوا فَضْلًا مِّن رَّبِّكُمْ ۚ فَإِذَا أَفَضْتُم مِّنْ عَرَفَاتٍ فَاذْكُرُوا اللَّهَ عِندَ الْمَشْعَرِ الْحَرَامِ ۖ وَاذْكُرُوهُ كَمَا هَدَاكُمْ وَإِن كُنتُم مِّن قَبْلِهِ لَمِنَ الضَّالِّينَ',
            'english'       => 'There is no blame upon you for seeking bounty from your Lord [during Hajj]. But when you depart from \'Arafat, remember Allah at al- Mash\'ar al-Haram. And remember Him, as He has guided you, for indeed, you were before that among those astray.',
            'bangla'        => 'তোমাদের উপরে কোনো অপরাধ হবে না যদি বা তোমরা তোমাদের প্রভুর কাছে দৌলত কামানোর চেষ্টা করো। তারপর তোমরা যখন আরাফাত থেকে জোট বেধে ফিঁরবে তখন মাশ\'আরিল-হারাম এর নিকটে আল্লাহ্‌কে স্মরণ করো; আর তাঁকে স্মরণ করো যেমন তিনি তোমাদের পথনির্দেশ দিয়েছেন, যদিও এর আগে নিঃসন্দেহ তোমরা ছিলে পথভ্রষ্টদের অন্তর্ভুক্ত।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 199,
            'page_no'       => 31,
            'jaz_no'        => 2,
            'arabic'        => 'ثُمَّ أَفِيضُوا مِنْ حَيْثُ أَفَاضَ النَّاسُ وَاسْتَغْفِرُوا اللَّهَ ۚ إِنَّ اللَّهَ غَفُورٌ رَّحِيمٌ',
            'english'       => 'Then depart from the place from where [all] the people depart and ask forgiveness of Allah. Indeed, Allah is Forgiving and Merciful.',
            'bangla'        => 'তারপর তোমরা তাড়াতাড়ি চল যেখান থেকে জনতা এগিয়ে চলে, আর আল্লাহ্‌র কাছে পরিত্রাণ খোঁজো, নিঃসন্দেহ আল্লাহ্ ত্রাণকর্তা, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 200,
            'page_no'       => 31,
            'jaz_no'        => 2,
            'arabic'        => 'فَإِذَا قَضَيْتُم مَّنَاسِكَكُمْ فَاذْكُرُوا اللَّهَ كَذِكْرِكُمْ آبَاءَكُمْ أَوْ أَشَدَّ ذِكْرًا ۗ فَمِنَ النَّاسِ مَن يَقُولُ رَبَّنَا آتِنَا فِي الدُّنْيَا وَمَا لَهُ فِي الْآخِرَةِ مِنْ خَلَاقٍ',
            'english'       => 'And when you have completed your rites, remember Allah like your [previous] remembrance of your fathers or with [much] greater remembrance. And among the people is he who says, "Our Lord, give us in this world," and he will have in the Hereafter no share.',
            'bangla'        => 'তারপর যখন তোমাদের পুণ্যানুষ্ঠান শেষ কর তখন আল্লাহ্‌র গুণগান করো, যেমন তোমরা তোমাদের পূর্বপুরুষদের জয়গান গাইতে, -- বরং তার চাইতেও বেশী গুণকীর্তন করো। কিন্তু মানুষের মাঝে এমনও লোক আছে যে বলে -- \'\'আমাদের প্রভু! এই দুনিয়াতে আমাদের দাও।’’ অতএব আখেরাতে তাদের জন্য কোনো ভাগ থাকবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 201,
            'page_no'       => 31,
            'jaz_no'        => 2,
            'arabic'        => 'وَمِنْهُم مَّن يَقُولُ رَبَّنَا آتِنَا فِي الدُّنْيَا حَسَنَةً وَفِي الْآخِرَةِ حَسَنَةً وَقِنَا عَذَابَ النَّارِ',
            'english'       => 'But among them is he who says, "Our Lord, give us in this world [that which is] good and in the Hereafter [that which is] good and protect us from the punishment of the Fire."',
            'bangla'        => 'আর তাদের মধ্যে এমনও আছে যে বলে -- \'\'আমাদের প্রভু! এই দুনিয়াতে আমাদের ভালো জিনিস অর্পণ করো, এবং আখেরাতেও ভালো জিনিস, আর আমাদের রক্ষা করো আগুনের শাস্তি থেকে।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 202,
            'page_no'       => 31,
            'jaz_no'        => 2,
            'arabic'        => 'أُولَـٰئِكَ لَهُمْ نَصِيبٌ مِّمَّا كَسَبُوا ۚ وَاللَّهُ سَرِيعُ الْحِسَابِ',
            'english'       => 'Those will have a share of what they have earned, and Allah is swift in account.',
            'bangla'        => 'এরাই -- তাদের জন্য আছে ভাগ যা তারা অর্জন করেছে তা থেকে। আর আল্লাহ্ হিসেব-নিকেশে তৎপর।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 203,
            'page_no'       => 32,
            'jaz_no'        => 2,
            'arabic'        => 'وَاذْكُرُوا اللَّهَ فِي أَيَّامٍ مَّعْدُودَاتٍ ۚ فَمَن تَعَجَّلَ فِي يَوْمَيْنِ فَلَا إِثْمَ عَلَيْهِ وَمَن تَأَخَّرَ فَلَا إِثْمَ عَلَيْهِ ۚ لِمَنِ اتَّقَىٰ ۗ وَاتَّقُوا اللَّهَ وَاعْلَمُوا أَنَّكُمْ إِلَيْهِ تُحْشَرُونَ',
            'english'       => 'And remember Allah during [specific] numbered days. Then whoever hastens [his departure] in two days - there is no sin upon him; and whoever delays [until the third] - there is no sin upon him - for him who fears Allah. And fear Allah and know that unto Him you will be gathered.',
            'bangla'        => 'আর আল্লাহ্‌কে স্মরণ করো নির্ধারিত দিনগুলোতে। কিন্তু যে দু’দিনে তাড়াতাড়ি করে, তাতে তার অপরাধ হবে না, আর যে দেরী করে তার উপরেও কোনো অপরাধ হবে না, -- যে ভয়-ভক্তি করে। আর তোমরা আল্লাহ্‌কে ভয়-ভক্তি করো, আর জেনে রেখো নিঃসন্দেহ তোমরা তাঁরই কাছে একত্রিত হবে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 204,
            'page_no'       => 32,
            'jaz_no'        => 2,
            'arabic'        => 'وَمِنَ النَّاسِ مَن يُعْجِبُكَ قَوْلُهُ فِي الْحَيَاةِ الدُّنْيَا وَيُشْهِدُ اللَّهَ عَلَىٰ مَا فِي قَلْبِهِ وَهُوَ أَلَدُّ الْخِصَامِ',
            'english'       => 'And of the people is he whose speech pleases you in worldly life, and he calls Allah to witness as to what is in his heart, yet he is the fiercest of opponents.',
            'bangla'        => 'আর মানুষের মধ্যে এমনও আছে যার দুনিয়াদারির কথাবার্তা তোমাকে তাজ্জব করে দেয়, আর সে আল্লাহ্‌কে সাক্ষী মানে তার অন্তরে যা আছে সে-সন্বন্ধে, অথচ সে-ই হচ্ছে প্রতিদ্বন্দ্বীদের মধ্যে সবচেয়ে মারা‌ত্মক।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 205,
            'page_no'       => 32,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِذَا تَوَلَّىٰ سَعَىٰ فِي الْأَرْضِ لِيُفْسِدَ فِيهَا وَيُهْلِكَ الْحَرْثَ وَالنَّسْلَ ۗ وَاللَّهُ لَا يُحِبُّ الْفَسَادَ',
            'english'       => 'And when he goes away, he strives throughout the land to cause corruption therein and destroy crops and animals. And Allah does not like corruption.',
            'bangla'        => 'আর সে যখন ফিরে যায় তখন সে দেশের মধ্যে দৌড়াদৌড়ি করে তাতে ফসাদ বাঁধাতে এবং ফসল ও পশুপাল বিনষ্ট করতে। আর আল্লাহ্ ফসাদ পছন্দ করেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 206,
            'page_no'       => 32,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِذَا قِيلَ لَهُ اتَّقِ اللَّهَ أَخَذَتْهُ الْعِزَّةُ بِالْإِثْمِ ۚ فَحَسْبُهُ جَهَنَّمُ ۚ وَلَبِئْسَ الْمِهَادُ',
            'english'       => 'And when it is said to him, "Fear Allah," pride in the sin takes hold of him. Sufficient for him is Hellfire, and how wretched is the resting place.',
            'bangla'        => 'আর যখন তাকে বলা হয় -- \'\'আল্লাহ্‌কে ভয়-ভক্তি করো,’’ অহংকার তাকে নিয়ে চলে পাপের মধ্যে, কাজেই জাহান্নাম হচ্ছে তার হিসেব-নিকেশ, -- আর নিশ্চয়ই মন্দ সেই বিশ্রাম-স্থান।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 207,
            'page_no'       => 32,
            'jaz_no'        => 2,
            'arabic'        => 'وَمِنَ النَّاسِ مَن يَشْرِي نَفْسَهُ ابْتِغَاءَ مَرْضَاتِ اللَّهِ ۗ وَاللَّهُ رَءُوفٌ بِالْعِبَادِ',
            'english'       => 'And of the people is he who sells himself, seeking means to the approval of Allah. And Allah is kind to [His] servants.',
            'bangla'        => 'আর মানুষের মাঝে এমনও আছে যে নিজের সত্তাকে বিক্রি করে দিয়েছে আল্লাহ্‌র সন্তষ্টি কামনা ক’রে। আর আল্লাহ্ পরম স্নেহময় বান্দাদের প্রতি।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 208,
            'page_no'       => 32,
            'jaz_no'        => 2,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا ادْخُلُوا فِي السِّلْمِ كَافَّةً وَلَا تَتَّبِعُوا خُطُوَاتِ الشَّيْطَانِ ۚ إِنَّهُ لَكُمْ عَدُوٌّ مُّبِينٌ',
            'english'       => 'O you who have believed, enter into Islam completely [and perfectly] and do not follow the footsteps of Satan. Indeed, he is to you a clear enemy.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! সম্পূর্ণরূপে আ‌ত্মসমর্পণে দাখিল হও, আর শয়তানের পদচিহ্ন অনুসরণ করো না। নিঃসন্দেহ সে তোমাদের জন্য প্রকাশ্য শত্রু।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 209,
            'page_no'       => 32,
            'jaz_no'        => 2,
            'arabic'        => '',
            'english'       => 'فَإِن زَلَلْتُم مِّن بَعْدِ مَا جَاءَتْكُمُ الْبَيِّنَاتُ فَاعْلَمُوا أَنَّ اللَّهَ عَزِيزٌ حَكِيمٌ',
            'bangla'        => 'কিন্তু যদি তোমরা পিছলে পড় তোমাদের কাছে স্পষ্ট প্রমাণাবলী আসবার পরেও, তবে জেনে রেখো -- নিঃসন্দেহ আল্লাহ মহাশক্তিশালী, পরমজ্ঞানী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 210,
            'page_no'       => 32,
            'jaz_no'        => 2,
            'arabic'        => 'هَلْ يَنظُرُونَ إِلَّا أَن يَأْتِيَهُمُ اللَّهُ فِي ظُلَلٍ مِّنَ الْغَمَامِ وَالْمَلَائِكَةُ وَقُضِيَ الْأَمْرُ ۚ وَإِلَى اللَّهِ تُرْجَعُ الْأُمُورُ',
            'english'       => 'But if you deviate after clear proofs have come to you, then know that Allah is Exalted in Might and Wise.',
            'bangla'        => 'তারা এছাড়া আর কিসের প্রতীক্ষা করে যে তাদের কাছে আল্লাহ্ আসবেন মেঘের ছায়ায়, আর ফিরিশ্‌তারাও, আর বিষয়টির নিস্পত্তি হয়ে গেছে? আর আল্লাহ্‌র কাছেই সব ব্যাপার ফিরে যায়।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 211,
            'page_no'       => 33,
            'jaz_no'        => 2,
            'arabic'        => 'سَلْ بَنِي إِسْرَائِيلَ كَمْ آتَيْنَاهُم مِّنْ آيَةٍ بَيِّنَةٍ ۗ وَمَن يُبَدِّلْ نِعْمَةَ اللَّهِ مِن بَعْدِ مَا جَاءَتْهُ فَإِنَّ اللَّهَ شَدِيدُ الْعِقَابِ',
            'english'       => 'Do they await but that Allah should come to them in covers of clouds and the angels [as well] and the matter is [then] decided? And to Allah [all] matters are returned.',
            'bangla'        => 'ইসরাইলের বংশধরদের জিজ্ঞাসা করো -- স্পষ্ট নিদর্শন-গুলো থেকে কতো না আমরা তাদের দিয়েছিলাম! আর যে কেউ আল্লাহ্‌র নিয়ামত বদল করে তা তার কাছে আসার পরে, তা হলে নিঃসন্দেহ আল্লাহ্ প্রতিফল দিতে কঠোর!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 212,
            'page_no'       => 33,
            'jaz_no'        => 2,
            'arabic'        => 'زُيِّنَ لِلَّذِينَ كَفَرُوا الْحَيَاةُ الدُّنْيَا وَيَسْخَرُونَ مِنَ الَّذِينَ آمَنُوا ۘ وَالَّذِينَ اتَّقَوْا فَوْقَهُمْ يَوْمَ الْقِيَامَةِ ۗ وَاللَّهُ يَرْزُقُ مَن يَشَاءُ بِغَيْرِ حِسَابٍ',
            'english'       => 'Beautified for those who disbelieve is the life of this world, and they ridicule those who believe. But those who fear Allah are above them on the Day of Resurrection. And Allah gives provision to whom He wills without account.',
            'bangla'        => 'যারা অবিশ্বাস পোষণ করে তাদের কাছে এই দুনিয়ার জীবন মনোরম ঠেকে, আর তারা মস্করা করে যারা ঈমান এনেছে তাদের। আর যারা ধর্মপরায়ণতা অবলন্বন করে তারা কিয়ামতের দিন ওদের উপরে থাকবে। আর আল্লাহ্ যাকে ইচ্ছে করেন বে-হিসাব রিযেক দান করেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 213,
            'page_no'       => 33,
            'jaz_no'        => 2,
            'arabic'        => 'كَانَ النَّاسُ أُمَّةً وَاحِدَةً فَبَعَثَ اللَّهُ النَّبِيِّينَ مُبَشِّرِينَ وَمُنذِرِينَ وَأَنزَلَ مَعَهُمُ الْكِتَابَ بِالْحَقِّ لِيَحْكُمَ بَيْنَ النَّاسِ فِيمَا اخْتَلَفُوا فِيهِ ۚ وَمَا اخْتَلَفَ فِيهِ إِلَّا الَّذِينَ أُوتُوهُ مِن بَعْدِ مَا جَاءَتْهُمُ الْبَيِّنَاتُ بَغْيًا بَيْنَهُمْ ۖ فَهَدَى اللَّهُ الَّذِينَ آمَنُوا لِمَا اخْتَلَفُوا فِيهِ مِنَ الْحَقِّ بِإِذْنِهِ ۗ وَاللَّهُ يَهْدِي مَن يَشَاءُ إِلَىٰ صِرَاطٍ مُّسْتَقِيمٍ',
            'english'       => 'Mankind was [of] one religion [before their deviation]; then Allah sent the prophets as bringers of good tidings and warners and sent down with them the Scripture in truth to judge between the people concerning that in which they differed. And none differed over the Scripture except those who were given it - after the clear proofs came to them - out of jealous animosity among themselves. And Allah guided those who believed to the truth concerning that over which they had differed, by His permission. And Allah guides whom He wills to a straight path.',
            'bangla'        => 'মানবগোষ্ঠী হচ্ছে একই জাতি। কাজেই আল্লাহ্ উত্থাপন করলেন নবীদের সুসংবাদদাতারূপে এবং সতর্ককারীরূপে, আর তাঁদের সঙ্গে তিনি অবতারণ করেছিলেন কিতাব সত্যতার সাথে যাতে তা মীমাংসা করতে পারে লোকদের মধ্যে যে-বিষয়ে তারা মতবিরোধ করত। আর কেউ এতে মতবিরোধ করে না তারা ছাড়া যাদের এ দেয়া হয়েছিল তাদের কাছে স্পষ্ট প্রমাণ আসার পরেও তাদের পরস্পরের মধ্যে বিদ্রোহাচরণ বশতঃ। তাই যারা ঈমান এনেছে, আল্লাহ্ তাদের হেদায়ত করলেন আপন এখতিয়ারে সেই সত্যতে যে বিষয়ে তারা মতবিরোধ করছিল। আর আল্লাহ্ যাকে ইচ্ছে করেন তাকে সহজ-সঠিক পথের দিকে পরিচালিত করেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 214,
            'page_no'       => 33,
            'jaz_no'        => 2,
            'arabic'        => 'أَمْ حَسِبْتُمْ أَن تَدْخُلُوا الْجَنَّةَ وَلَمَّا يَأْتِكُم مَّثَلُ الَّذِينَ خَلَوْا مِن قَبْلِكُم ۖ مَّسَّتْهُمُ الْبَأْسَاءُ وَالضَّرَّاءُ وَزُلْزِلُوا حَتَّىٰ يَقُولَ الرَّسُولُ وَالَّذِينَ آمَنُوا مَعَهُ مَتَىٰ نَصْرُ اللَّهِ ۗ أَلَا إِنَّ نَصْرَ اللَّهِ قَرِيبٌ',
            'english'       => 'Or do you think that you will enter Paradise while such [trial] has not yet come to you as came to those who passed on before you? They were touched by poverty and hardship and were shaken until [even their] messenger and those who believed with him said, "When is the help of Allah?" Unquestionably, the help of Allah is near.',
            'bangla'        => 'অথবা তোমরা কি বিবেচনা করো যে তোমরা বেহেশতে দাখিল হতে পারবে যতক্ষণ না তোমাদের উপরেও তোমাদের আগে যারা গত হয়েছে তাদের ন্যায় না বর্তায়? তাদের আক্রমণ করেছিল দারুণ বিপর্যয় এবং চরম দুর্দশা, আর তারা কেঁপেছিল, শেষ পর্যন্ত রসূল ও তাঁর সঙ্গে যারা ঈমান এনেছিল তারা বললে -- \'\'আল্লাহ্‌র সাহায্য কখন?’’ আল্লাহ্‌র সাহায্য অবশ্যই নিকটবর্তী নয় কি?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 215,
            'page_no'       => 33,
            'jaz_no'        => 2,
            'arabic'        => 'يَسْأَلُونَكَ مَاذَا يُنفِقُونَ ۖ قُلْ مَا أَنفَقْتُم مِّنْ خَيْرٍ فَلِلْوَالِدَيْنِ وَالْأَقْرَبِينَ وَالْيَتَامَىٰ وَالْمَسَاكِينِ وَابْنِ السَّبِيلِ ۗ وَمَا تَفْعَلُوا مِنْ خَيْرٍ فَإِنَّ اللَّهَ بِهِ عَلِيمٌ',
            'english'       => 'They ask you, [O Muhammad], what they should spend. Say, "Whatever you spend of good is [to be] for parents and relatives and orphans and the needy and the traveler. And whatever you do of good - indeed, Allah is Knowing of it."',
            'bangla'        => 'তারা তোমায় জিজ্ঞেস করছে কি তারা খরচ করবে। বলো -- \'\'ভালো জিনিস যা-কিছু তোমরা খরচ করো তা মাতাপিতার জন্য ও নিকট-আ‌ত্মীয়দের ও এতিমদের ও মিসকিনদের ও পথচারীদের জন্য। আর ভালো কাজ যা-কিছু কর, নিঃসন্দেহ আল্লাহ্ সে-সন্বন্ধে সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 216,
            'page_no'       => 34,
            'jaz_no'        => 2,
            'arabic'        => 'كُتِبَ عَلَيْكُمُ الْقِتَالُ وَهُوَ كُرْهٌ لَّكُمْ ۖ وَعَسَىٰ أَن تَكْرَهُوا شَيْئًا وَهُوَ خَيْرٌ لَّكُمْ ۖ وَعَسَىٰ أَن تُحِبُّوا شَيْئًا وَهُوَ شَرٌّ لَّكُمْ ۗ وَاللَّهُ يَعْلَمُ وَأَنتُمْ لَا تَعْلَمُونَ',
            'english'       => 'Fighting has been enjoined upon you while it is hateful to you. But perhaps you hate a thing and it is good for you; and perhaps you love a thing and it is bad for you. And Allah Knows, while you know not.',
            'bangla'        => 'তোমাদের জন্য যুদ্ধ বিধিবদ্ধ করা হলো, অথচ তোমাদের জন্য তা অপ্রীতিকর। আর হতে পারে তোমরা কোনো-কিছু অপছন্দ করলে, অথচ তা তোমাদের জন্য মঙ্গলজনক, আবার হতে পারে তোমরা কোনো-কিছু ভালোবাসলে, অথচ তা তোমাদের জন্য মন্দ। আর আল্লাহ জানেন, যদিও তোমরা জানো না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 217,
            'page_no'       => 34,
            'jaz_no'        => 2,
            'arabic'        => 'يَسْأَلُونَكَ عَنِ الشَّهْرِ الْحَرَامِ قِتَالٍ فِيهِ ۖ قُلْ قِتَالٌ فِيهِ كَبِيرٌ ۖ وَصَدٌّ عَن سَبِيلِ اللَّهِ وَكُفْرٌ بِهِ وَالْمَسْجِدِ الْحَرَامِ وَإِخْرَاجُ أَهْلِهِ مِنْهُ أَكْبَرُ عِندَ اللَّهِ ۚ وَالْفِتْنَةُ أَكْبَرُ مِنَ الْقَتْلِ ۗ وَلَا يَزَالُونَ يُقَاتِلُونَكُمْ حَتَّىٰ يَرُدُّوكُمْ عَن دِينِكُمْ إِنِ اسْتَطَاعُوا ۚ وَمَن يَرْتَدِدْ مِنكُمْ عَن دِينِهِ فَيَمُتْ وَهُوَ كَافِرٌ فَأُولَـٰئِكَ حَبِطَتْ أَعْمَالُهُمْ فِي الدُّنْيَا وَالْآخِرَةِ ۖ وَأُولَـٰئِكَ أَصْحَابُ النَّارِ ۖ هُمْ فِيهَا خَالِدُونَ',
            'english'       => 'They ask you about the sacred month - about fighting therein. Say, "Fighting therein is great [sin], but averting [people] from the way of Allah and disbelief in Him and [preventing access to] al-Masjid al-Haram and the expulsion of its people therefrom are greater [evil] in the sight of Allah. And fitnah is greater than killing." And they will continue to fight you until they turn you back from your religion if they are able. And whoever of you reverts from his religion [to disbelief] and dies while he is a disbeliever - for those, their deeds have become worthless in this world and the Hereafter, and those are the companions of the Fire, they will abide therein eternally.',
            'bangla'        => 'তারা তোমাকে পবিত্র মাস সম্পর্কে প্রশ্ন করছে -- তাতে যুদ্ধ করার ব্যাপারে। বলো -- \'\'এতে যুদ্ধ করা গুরুতর, কিন্তু আল্লাহ্‌র রাস্তা থেকে ফিরিয়ে রাখা, আর তাঁর প্রতি ও পবিত্র মসজিদের প্রতি অবিশ্বাস পোষণ করা, এবং তার বাসিন্দাদের সেখান থেকে বের করে দেয়া আল্লাহ্‌র কাছে আরও গুরুতর! আর উৎপীড়ন হত্যার চেয়ে গুরুতর। আর তারা তোমাদের সাথে যুদ্ধ করা থামাবে না যতক্ষণ না তারা তোমাদের ধর্ম থেকে তোমাদের ফিরিয়ে নিতে পারে, -- যদি তারা পারে। আর তোমাদের মধ্যে থেকে যে তার ধর্ম থেকে ফিরে যায় ও মারা যায় অবিশ্বাসী থাকা অবস্থায়, তা হলে এরাই -- এদের সব কাজ এই দুনিয়াতে ও আখেরাতে বৃথা যাবে। আর তারাই হচ্ছে আগুনের অধিবাসী, তারা এতে থাকবে দীর্ঘকাল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 218,
            'page_no'       => 34,
            'jaz_no'        => 2,
            'arabic'        => 'إِنَّ الَّذِينَ آمَنُوا وَالَّذِينَ هَاجَرُوا وَجَاهَدُوا فِي سَبِيلِ اللَّهِ أُولَـٰئِكَ يَرْجُونَ رَحْمَتَ اللَّهِ ۚ وَاللَّهُ غَفُورٌ رَّحِيمٌ',
            'english'       => 'Indeed, those who have believed and those who have emigrated and fought in the cause of Allah - those expect the mercy of Allah. And Allah is Forgiving and Merciful.',
            'bangla'        => 'নিঃসন্দেহ যারা ঈমান এনেছিল ও যারা হিজরত করেছিল, এবং আল্লাহ্‌র রাস্তায় কঠোর সংগ্রাম করেছিল, -- এরাই আশা রাখে আল্লাহ্‌র করুণার। আর আল্লাহ্ ত্রাণকর্তা, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 219,
            'page_no'       => 34,
            'jaz_no'        => 2,
            'arabic'        => 'يَسْأَلُونَكَ عَنِ الْخَمْرِ وَالْمَيْسِرِ ۖ قُلْ فِيهِمَا إِثْمٌ كَبِيرٌ وَمَنَافِعُ لِلنَّاسِ وَإِثْمُهُمَا أَكْبَرُ مِن نَّفْعِهِمَا ۗ وَيَسْأَلُونَكَ مَاذَا يُنفِقُونَ قُلِ الْعَفْوَ ۗ كَذَٰلِكَ يُبَيِّنُ اللَّهُ لَكُمُ الْآيَاتِ لَعَلَّكُمْ تَتَفَكَّرُونَ',
            'english'       => 'They ask you about wine and gambling. Say, "In them is great sin and [yet, some] benefit for people. But their sin is greater than their benefit." And they ask you what they should spend. Say, "The excess [beyond needs]." Thus Allah makes clear to you the verses [of revelation] that you might give thought.',
            'bangla'        => 'তারা তোমাকে নেশা ও জুয়া সন্বন্ধে জিজ্ঞাসা করছে। বলো -- \'\'এই দুয়েতেই আছে মহাপাপ ও মানুষের জন্য মুনাফা, কিন্তু তাদের পাপ তাদের মুনাফার চাইতে গুরুতর। আর তারা তোমায় সওয়াল করে কী তারা খরচ করবে। বলো -- \'\'যা বাড়তি থাকে।’’ এইভাবে আল্লাহ্ তোমাদের জন্য বাণীসমূহ স্পষ্ট করেন যাতে তোমরা ভেবে দেখতে পার, --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 220,
            'page_no'       => 35,
            'jaz_no'        => 2,
            'arabic'        => 'فِي الدُّنْيَا وَالْآخِرَةِ ۗ وَيَسْأَلُونَكَ عَنِ الْيَتَامَىٰ ۖ قُلْ إِصْلَاحٌ لَّهُمْ خَيْرٌ ۖ وَإِن تُخَالِطُوهُمْ فَإِخْوَانُكُمْ ۚ وَاللَّهُ يَعْلَمُ الْمُفْسِدَ مِنَ الْمُصْلِحِ ۚ وَلَوْ شَاءَ اللَّهُ لَأَعْنَتَكُمْ ۚ إِنَّ اللَّهَ عَزِيزٌ حَكِيمٌ',
            'english'       => 'To this world and the Hereafter. And they ask you about orphans. Say, "Improvement for them is best. And if you mix your affairs with theirs - they are your brothers. And Allah knows the corrupter from the amender. And if Allah had willed, He could have put you in difficulty. Indeed, Allah is Exalted in Might and Wise.',
            'bangla'        => 'এই দুনিয়া ও আখেরাতের সন্বন্ধে। আর তারা তোমায় এতিমদের সম্পর্কে প্রশ্ন করছে। বলো -- \'\'তাদের জন্য সুব্যবস্থা করা উত্তম।’’ আর তোমরা যদি তাদের সঙ্গে অংশীদার হও তবে তারা তোমাদের ভাই। আর আল্লাহ্ হিতকারীদের থেকে ফেসাদকারীদের জানেন । আর আল্লাহ্ যদি ইচ্ছা করতেন তবে নিশ্চয়ই তোমাদের বিপন্ন করতে পারতেন। নিঃসন্দেহ আল্লাহ্ মহাশক্তিশালী, পরমজ্ঞানী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 221,
            'page_no'       => 35,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَا تَنكِحُوا الْمُشْرِكَاتِ حَتَّىٰ يُؤْمِنَّ ۚ وَلَأَمَةٌ مُّؤْمِنَةٌ خَيْرٌ مِّن مُّشْرِكَةٍ وَلَوْ أَعْجَبَتْكُمْ ۗ وَلَا تُنكِحُوا الْمُشْرِكِينَ حَتَّىٰ يُؤْمِنُوا ۚ وَلَعَبْدٌ مُّؤْمِنٌ خَيْرٌ مِّن مُّشْرِكٍ وَلَوْ أَعْجَبَكُمْ ۗ أُولَـٰئِكَ يَدْعُونَ إِلَى النَّارِ ۖ وَاللَّهُ يَدْعُو إِلَى الْجَنَّةِ وَالْمَغْفِرَةِ بِإِذْنِهِ ۖ وَيُبَيِّنُ آيَاتِهِ لِلنَّاسِ لَعَلَّهُمْ يَتَذَكَّرُونَ',
            'english'       => 'And do not marry polytheistic women until they believe. And a believing slave woman is better than a polytheist, even though she might please you. And do not marry polytheistic men [to your women] until they believe. And a believing slave is better than a polytheist, even though he might please you. Those invite [you] to the Fire, but Allah invites to Paradise and to forgiveness, by His permission. And He makes clear His verses to the people that perhaps they may remember.',
            'bangla'        => 'আর মুশরিক নারীদের বিয়ে করো না যে পর্যন্ত না তারা ঈমান আনে । আর নিঃসন্দেহ একজন মুমিন দাসীও একজন মুশরিক নারীর চেয়ে ভালো, যদিও বা সে তোমাদের মোহিত করে দেয়। আর বিয়ে দিয়ো না মুশরিকদের সাথে যে পর্যন্ত না তারা ঈমান আনে, কেননা নিঃসন্দেহ একজন মুমিন গোলামও একজন মুশরিকের চেয়ে উত্তম, যদিও সে তোমাদের তাজ্জব করে দেয়। এই সব আমন্ত্রণ করে আগুনের প্রতি, আর আল্লাহ্ আহ্বান করেন বেহেশতের দিকে এবং পরিত্রাণের দিকে তাঁর নিজ ইচ্ছায়, আর তিনি মানুষের জন্য তাঁর নির্দেশাবলী সুস্পষ্ট করে দেন যেন তারা মনোযোগ দেয়।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 222,
            'page_no'       => 35,
            'jaz_no'        => 2,
            'arabic'        => 'وَيَسْأَلُونَكَ عَنِ الْمَحِيضِ ۖ قُلْ هُوَ أَذًى فَاعْتَزِلُوا النِّسَاءَ فِي الْمَحِيضِ ۖ وَلَا تَقْرَبُوهُنَّ حَتَّىٰ يَطْهُرْنَ ۖ فَإِذَا تَطَهَّرْنَ فَأْتُوهُنَّ مِنْ حَيْثُ أَمَرَكُمُ اللَّهُ ۚ إِنَّ اللَّهَ يُحِبُّ التَّوَّابِينَ وَيُحِبُّ الْمُتَطَهِّرِينَ',
            'english'       => 'And they ask you about menstruation. Say, "It is harm, so keep away from wives during menstruation. And do not approach them until they are pure. And when they have purified themselves, then come to them from where Allah has ordained for you. Indeed, Allah loves those who are constantly repentant and loves those who purify themselves."',
            'bangla'        => 'তারা তোমাকে ঋতুস্রাব সন্বন্ধে জিজ্ঞাসা করছে। বলো -- \'\'ইহা অনিষ্টকর, কাজেই ঋতুকালে স্ত্রীদের থেকে আলাদা থাকবে, এবং তাদের নিকটবর্তী হয়ো না যে পর্যন্ত না তারা পরিস্কার হয়ে যায়। তারপর যখন তারা নিজেদের পরিস্কার করে নেয় তখন তাদের সঙ্গে মিলিত হও যেভাবে আল্লাহ্ তোমাদের আদেশ দিয়েছেন।’’ নিঃসন্দেহ আল্লাহ্ ভালোবাসেন তাদের যারা তাঁর দিকে ফেরে, আর তিনি ভালবাসেন পরিচ্ছন্নতা রক্ষাকারীদের।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 223,
            'page_no'       => 35,
            'jaz_no'        => 2,
            'arabic'        => 'نِسَاؤُكُمْ حَرْثٌ لَّكُمْ فَأْتُوا حَرْثَكُمْ أَنَّىٰ شِئْتُمْ ۖ وَقَدِّمُوا لِأَنفُسِكُمْ ۚ وَاتَّقُوا اللَّهَ وَاعْلَمُوا أَنَّكُم مُّلَاقُوهُ ۗ وَبَشِّرِ الْمُؤْمِنِينَ',
            'english'       => 'Your wives are a place of sowing of seed for you, so come to your place of cultivation however you wish and put forth [righteousness] for yourselves. And fear Allah and know that you will meet Him. And give good tidings to the believers.',
            'bangla'        => 'তোমাদের স্ত্রীরা তোমাদের জন্য এক ক্ষেতখামার। সুতরাং তোমরা যখন-যেমন ইচ্ছে কর তোমাদের ক্ষেতখামারে গমন করো। আর তোমাদের নিজেদের জন্যে অগ্রিম ব্যবস্থা অবলন্বন করো। আর আল্লাহ্‌কে ভয়-ভক্তি করবে, আর জেনে রেখো -- নিশ্চয় তাঁর সঙ্গে তোমাদের মোলাকাত হবে। আর সুসংবাদ দাও মুমিনদের।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 224,
            'page_no'       => 35,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَا تَجْعَلُوا اللَّهَ عُرْضَةً لِّأَيْمَانِكُمْ أَن تَبَرُّوا وَتَتَّقُوا وَتُصْلِحُوا بَيْنَ النَّاسِ ۗ وَاللَّهُ سَمِيعٌ عَلِيمٌ',
            'english'       => 'And do not make [your oath by] Allah an excuse against being righteous and fearing Allah and making peace among people. And Allah is Hearing and Knowing.',
            'bangla'        => 'আর আল্লাহ্‌কে প্রতিবন্ধক বানিয়ো না তোমাদের শপথের দ্বারা তোমাদের ভালো কাজ করার বেলা ও ভয়ভক্তি দেখাতে, ও লোকদের মধ্যে শান্তি প্রতিষ্ঠার ক্ষেত্রে। আর আল্লাহ্ সর্বশ্রোতা, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 225,
            'page_no'       => 36,
            'jaz_no'        => 2,
            'arabic'        => 'لَّا يُؤَاخِذُكُمُ اللَّهُ بِاللَّغْوِ فِي أَيْمَانِكُمْ وَلَـٰكِن يُؤَاخِذُكُم بِمَا كَسَبَتْ قُلُوبُكُمْ ۗ وَاللَّهُ غَفُورٌ حَلِيمٌ',
            'english'       => 'Allah does not impose blame upon you for what is unintentional in your oaths, but He imposes blame upon you for what your hearts have earned. And Allah is Forgiving and Forbearing.',
            'bangla'        => 'আল্লাহ্ তোমাদের পাকড়াবেন না তোমাদের শপথগুলোর মধ্যে যা খেলো, কিন্তু তিনি তোমাদের পাকড়াও করবেন যা তোমাদের হৃদয় অর্জন করেছে। আর আল্লাহ্ ত্রাণকর্তা, পরম সহিষ্ণু।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 226,
            'page_no'       => 36,
            'jaz_no'        => 2,
            'arabic'        => 'لِّلَّذِينَ يُؤْلُونَ مِن نِّسَائِهِمْ تَرَبُّصُ أَرْبَعَةِ أَشْهُرٍ ۖ فَإِن فَاءُوا فَإِنَّ اللَّهَ غَفُورٌ رَّحِيمٌ',
            'english'       => 'For those who swear not to have sexual relations with their wives is a waiting time of four months, but if they return [to normal relations] - then indeed, Allah is Forgiving and Merciful.',
            'bangla'        => 'যারা তাদের স্ত্রীদের থেকে \'\'ইলা’’ করে, চার মাসকাল অপেক্ষা করতে হবে, কিন্তু তারা যদি ফিরে যায়, তা হলে আল্লাহ্ নিশ্চয় ত্রাণকর্তা, অফুরন্ত ফলদাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 227,
            'page_no'       => 36,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِنْ عَزَمُوا الطَّلَاقَ فَإِنَّ اللَّهَ سَمِيعٌ عَلِيمٌ',
            'english'       => 'And if they decide on divorce - then indeed, Allah is Hearing and Knowing.',
            'bangla'        => 'আর যদি তারা সিদ্ধান্ত নিয়ে থাকে তালাকের, তবে নিঃসন্দেহ আল্লাহ্ সর্বশ্রোতা, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 228,
            'page_no'       => 36,
            'jaz_no'        => 2,
            'arabic'        => 'وَالْمُطَلَّقَاتُ يَتَرَبَّصْنَ بِأَنفُسِهِنَّ ثَلَاثَةَ قُرُوءٍ ۚ وَلَا يَحِلُّ لَهُنَّ أَن يَكْتُمْنَ مَا خَلَقَ اللَّهُ فِي أَرْحَامِهِنَّ إِن كُنَّ يُؤْمِنَّ بِاللَّهِ وَالْيَوْمِ الْآخِرِ ۚ وَبُعُولَتُهُنَّ أَحَقُّ بِرَدِّهِنَّ فِي ذَٰلِكَ إِنْ أَرَادُوا إِصْلَاحًا ۚ وَلَهُنَّ مِثْلُ الَّذِي عَلَيْهِنَّ بِالْمَعْرُوفِ ۚ وَلِلرِّجَالِ عَلَيْهِنَّ دَرَجَةٌ ۗ وَاللَّهُ عَزِيزٌ حَكِيمٌ',
            'english'       => 'Divorced women remain in waiting for three periods, and it is not lawful for them to conceal what Allah has created in their wombs if they believe in Allah and the Last Day. And their husbands have more right to take them back in this [period] if they want reconciliation. And due to the wives is similar to what is expected of them, according to what is reasonable. But the men have a degree over them [in responsibility and authority]. And Allah is Exalted in Might and Wise.',
            'bangla'        => 'আর তালাকপ্রাপ্তা নারীরা নিজেদের প্রতীক্ষায় রাখবে তিন ঋতুকাল। আর তাদের জন্য বৈধ হবে না লুকিয়ে রাখা যা আল্লাহ্ তাদের গর্ভে সৃষ্টি করেছেন, যদি তারা আল্লাহ্‌তে ও শেষ দিনে ঈমান আনে। আর তাদের স্বামীদের অধিকতর হক্ আছে তাদের ইতিমধ্যে ফিরিয়ে নেবার, যদি তারা মিটমাট করতে চায়। আর স্ত্রীদের তেমন অধিকার আছে যেমন আছে তাদের উপরে ন্যায়সঙ্গতভাবে। অবশ্য পুরুষদের অবস্থান তাদের কিছুটা উপরে। আর আল্লাহ্ মহাশক্তিশালী, পরমজ্ঞানী!'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 229,
            'page_no'       => 36,
            'jaz_no'        => 2,
            'arabic'        => '',
            'english'       => 'Divorce is twice. Then, either keep [her] in an acceptable manner or release [her] with good treatment. And it is not lawful for you to take anything of what you have given them unless both fear that they will not be able to keep [within] the limits of Allah. But if you fear that they will not keep [within] the limits of Allah, then there is no blame upon either of them concerning that by which she ransoms herself. These are the limits of Allah, so do not transgress them. And whoever transgresses the limits of Allah - it is those who are the wrongdoers.',
            'bangla'        => 'তালাক দুইবার, তারপর পুরোদস্তুর রক্ষণ নয়ত সুন্দরভাবে বিদায় দান। আর তোমাদের জন্য বৈধ নয় তাদের যা দিয়েছ তা থেকে কিছু ফিরিয়ে নেয়া, যদি না দুজনেই আশঙ্কা করে যে আল্লাহ্‌র নির্দেশিত সীমা কায়েম রাখা তাদের পক্ষে সম্ভবপর নয়। কিন্তু তোমরা যদি আশঙ্কা কর যে তারা আল্লাহ্‌র গন্ডির ভেতরে কায়েম থাকতে পারবে না, তা হলে তাদের জন্যে অপরাধ হবে না যার বিনিময়ে সে মুক্ত হতে চায়। এইসব হচ্ছে আল্লাহ্‌র নির্দেশিত গন্ডি, অতএব এ-সব লঙ্ঘন করো না, আর যারা আল্লাহ্‌র গন্ডি লঙ্ঘন করে তারা নিজেরাই হচ্ছে অন্যায়কারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 230,
            'page_no'       => 36,
            'jaz_no'        => 2,
            'arabic'        => 'فَإِن طَلَّقَهَا فَلَا تَحِلُّ لَهُ مِن بَعْدُ حَتَّىٰ تَنكِحَ زَوْجًا غَيْرَهُ ۗ فَإِن طَلَّقَهَا فَلَا جُنَاحَ عَلَيْهِمَا أَن يَتَرَاجَعَا إِن ظَنَّا أَن يُقِيمَا حُدُودَ اللَّهِ ۗ وَتِلْكَ حُدُودُ اللَّهِ يُبَيِّنُهَا لِقَوْمٍ يَعْلَمُونَ',
            'english'       => 'And if he has divorced her [for the third time], then she is not lawful to him afterward until [after] she marries a husband other than him. And if the latter husband divorces her [or dies], there is no blame upon the woman and her former husband for returning to each other if they think that they can keep [within] the limits of Allah. These are the limits of Allah, which He makes clear to a people who know.',
            'bangla'        => 'তারপর যদি সে তাকে তালাক দেয় তবে এরপর সে তার জন্য বৈধ হবে না যে পর্যন্ত না সে অন্য স্বামীকে বিবাহ করে। এখন যদি সেও তাকে তালাক দিয়ে দেয় তাহলে তাদের উভয়ের অপরাধ হবে না যদি তারা পরস্পরের কাছে ফিরে আসে, -- যদি তারা বিবেচনা করে যে তারা আল্লাহ্‌র গন্ডির মধ্যে থাকতে পারবে। আর এগুলো হচ্ছে আল্লাহ্‌র নির্দেশিত সীমা, -- তিনি তা সুস্পষ্ট করে দেন সেই লোকদের জন্য যারা জানে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 231,
            'page_no'       => 37,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِذَا طَلَّقْتُمُ النِّسَاءَ فَبَلَغْنَ أَجَلَهُنَّ فَأَمْسِكُوهُنَّ بِمَعْرُوفٍ أَوْ سَرِّحُوهُنَّ بِمَعْرُوفٍ ۚ وَلَا تُمْسِكُوهُنَّ ضِرَارًا لِّتَعْتَدُوا ۚ وَمَن يَفْعَلْ ذَٰلِكَ فَقَدْ ظَلَمَ نَفْسَهُ ۚ وَلَا تَتَّخِذُوا آيَاتِ اللَّهِ هُزُوًا ۚ وَاذْكُرُوا نِعْمَتَ اللَّهِ عَلَيْكُمْ وَمَا أَنزَلَ عَلَيْكُم مِّنَ الْكِتَابِ وَالْحِكْمَةِ يَعِظُكُم بِهِ ۚ وَاتَّقُوا اللَّهَ وَاعْلَمُوا أَنَّ اللَّهَ بِكُلِّ شَيْءٍ عَلِيمٌ',
            'english'       => 'And when you divorce women and they have [nearly] fulfilled their term, either retain them according to acceptable terms or release them according to acceptable terms, and do not keep them, intending harm, to transgress [against them]. And whoever does that has certainly wronged himself. And do not take the verses of Allah in jest. And remember the favor of Allah upon you and what has been revealed to you of the Book and wisdom by which He instructs you. And fear Allah and know that Allah is Knowing of all things.',
            'bangla'        => 'আর যখন স্ত্রীদের তালাক দাও, আর তারা তাদের ইদ্দত পূর্ণ করে, তারপর হয় তাদের রাখবে সদয়ভাবে, নয় তাদের মুক্তি দেবে সদয়ভাবে। আর তাদের আটকে রেখো না ক্ষতি করার জন্যে, -- যার ফলে তোমরা সীমা লঙ্ঘন করবে, আর যে তাই করে সে নিশ্চয় তার নিজের প্রতি অন্যায় করে। আর আল্লাহ্‌র প্রত্যাদেশকে তামাশার বস্তু করে নিয়ো না, আর স্মরণ করো তোমাদের উপরে আল্লাহ্‌র নিয়ামত ও তোমাদের কাছে যা তিনি অবতারণ করেছেন কিতাব ও হিক্‌মত, যার দ্বারা তিনি তোমাদের উপদেশ দিচ্ছেন। আর আল্লাহ্‌কে ভয়ভক্তি করবে, আর জেনে রেখো -- নিশ্চয় আল্লাহ্ সব-কিছু সম্পর্কে সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 232,
            'page_no'       => 37,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِذَا طَلَّقْتُمُ النِّسَاءَ فَبَلَغْنَ أَجَلَهُنَّ فَلَا تَعْضُلُوهُنَّ أَن يَنكِحْنَ أَزْوَاجَهُنَّ إِذَا تَرَاضَوْا بَيْنَهُم بِالْمَعْرُوفِ ۗ ذَٰلِكَ يُوعَظُ بِهِ مَن كَانَ مِنكُمْ يُؤْمِنُ بِاللَّهِ وَالْيَوْمِ الْآخِرِ ۗ ذَٰلِكُمْ أَزْكَىٰ لَكُمْ وَأَطْهَرُ ۗ وَاللَّهُ يَعْلَمُ وَأَنتُمْ لَا تَعْلَمُونَ',
            'english'       => 'And when you divorce women and they have fulfilled their term, do not prevent them from remarrying their [former] husbands if they agree among themselves on an acceptable basis. That is instructed to whoever of you believes in Allah and the Last Day. That is better for you and purer, and Allah knows and you know not.',
            'bangla'        => 'আর যখন তোমরা স্ত্রীদের তালাক দাও, আর তারা তাদের ইদ্দত পূর্ণ করে, তখন তাদের বাধা দিয়ো না তাদের স্বামীদের বিয়ে করতে, যদি তারা নিজেদের মধ্যে রাজী হয় সঙ্গতভাবে। এইভাবে এরদ্বারা উপদেশ দেয়া হচ্ছে তোমাদের মধ্যে তাকে যে আল্লাহ্‌তে ও শেষ দিনে ঈমান আনে। এইটি তোমাদের জন্য অধিকতর পরিচ্ছন্ন ও পবিত্রতর। আর আল্লাহ্ জানেন অথচ তোমরা জানো না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 233,
            'page_no'       => 37,
            'jaz_no'        => 2,
            'arabic'        => 'وَالْوَالِدَاتُ يُرْضِعْنَ أَوْلَادَهُنَّ حَوْلَيْنِ كَامِلَيْنِ ۖ لِمَنْ أَرَادَ أَن يُتِمَّ الرَّضَاعَةَ ۚ وَعَلَى الْمَوْلُودِ لَهُ رِزْقُهُنَّ وَكِسْوَتُهُنَّ بِالْمَعْرُوفِ ۚ لَا تُكَلَّفُ نَفْسٌ إِلَّا وُسْعَهَا ۚ لَا تُضَارَّ وَالِدَةٌ بِوَلَدِهَا وَلَا مَوْلُودٌ لَّهُ بِوَلَدِهِ ۚ وَعَلَى الْوَارِثِ مِثْلُ ذَٰلِكَ ۗ فَإِنْ أَرَادَا فِصَالًا عَن تَرَاضٍ مِّنْهُمَا وَتَشَاوُرٍ فَلَا جُنَاحَ عَلَيْهِمَا ۗ وَإِنْ أَرَدتُّمْ أَن تَسْتَرْضِعُوا أَوْلَادَكُمْ فَلَا جُنَاحَ عَلَيْكُمْ إِذَا سَلَّمْتُم مَّا آتَيْتُم بِالْمَعْرُوفِ ۗ وَاتَّقُوا اللَّهَ وَاعْلَمُوا أَنَّ اللَّهَ بِمَا تَعْمَلُونَ بَصِيرٌ',
            'english'       => 'Mothers may breastfeed their children two complete years for whoever wishes to complete the nursing [period]. Upon the father is the mothers\' provision and their clothing according to what is acceptable. No person is charged with more than his capacity. No mother should be harmed through her child, and no father through his child. And upon the [father\'s] heir is [a duty] like that [of the father]. And if they both desire weaning through mutual consent from both of them and consultation, there is no blame upon either of them. And if you wish to have your children nursed by a substitute, there is no blame upon you as long as you give payment according to what is acceptable. And fear Allah and know that Allah is Seeing of what you do.',
            'bangla'        => 'আর মায়েরা নিজ সন্তানদের পুরো দু’বছর স্তন্য খেতে দেবে, -- যে চায় স্তন্যদান পুরো করতে। তার পিতার উপরে দায়িত্ব তাদের খাওয়ানো ও পরানো ন্যায়সঙ্গতরূপে। কোনো লোকেরই উচিত নয় এমন দায়িত্ব আরোপ করা যা তার ক্ষমতার অতিরিক্ত। মাতাকেও যেন সন্তানের জন্য ক্ষতিগ্রস্ত হতে না হয়, আর যার রসে সন্তান জন্মেছে তাকেও যেন নিজের সন্তানের দরুন, আর উত্তরাধিকারীর উপরে দায়িত্ব তার অনুরূপ করা। কিন্তু যদি দুজনেই ইচ্ছা করে মাই ছাড়াতে, উভয়ের মধ্যে সম্মতিক্রমে এবং পরামর্শক্রমে, তবে তাদের কোনো অপরাধ হবে না। আর যদি তোমরা চাও তোমাদের সন্তানদের জন্য ধাইমা নিযুক্ত করতে, তাতেও তোমাদের কোনো অপরাধ হবে না যে পর্যন্ত তোমরা রাজী থাকো যা তোমরা পুরোদস্তুর প্রদান করবে। আর আল্লাহ্‌কে ভয়ভক্তি করবে, আর জেনে রেখো -- নিঃসন্দেহ তোমরা যা করো আল্লাহ্ তার দর্শক।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 234,
            'page_no'       => 38,
            'jaz_no'        => 2,
            'arabic'        => 'وَالَّذِينَ يُتَوَفَّوْنَ مِنكُمْ وَيَذَرُونَ أَزْوَاجًا يَتَرَبَّصْنَ بِأَنفُسِهِنَّ أَرْبَعَةَ أَشْهُرٍ وَعَشْرًا ۖ فَإِذَا بَلَغْنَ أَجَلَهُنَّ فَلَا جُنَاحَ عَلَيْكُمْ فِيمَا فَعَلْنَ فِي أَنفُسِهِنَّ بِالْمَعْرُوفِ ۗ وَاللَّهُ بِمَا تَعْمَلُونَ خَبِيرٌ',
            'english'       => 'And those who are taken in death among you and leave wives behind - they, [the wives, shall] wait four months and ten [days]. And when they have fulfilled their term, then there is no blame upon you for what they do with themselves in an acceptable manner. And Allah is [fully] Acquainted with what you do.',
            'bangla'        => 'আর তোমাদের মধ্যে যারা মারা যায় ও রেখে যায় স্ত্রীদের, তারা নিজেদের অপেক্ষায় রাখবে চার মাস ও দশ। তারপর তারা যখন তাদের সময়ের মোড়ে পৌঁছে যায় তখন তোমাদের কোনো অপরাধ হবে না যা তারা নিজেদের জন্য করে ন্যায়সঙ্গতভাবে। আর তোমরা যা কর সে-সন্বন্ধে আল্লাহ্ ওয়াকিবহাল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 235,
            'page_no'       => 38,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَا جُنَاحَ عَلَيْكُمْ فِيمَا عَرَّضْتُم بِهِ مِنْ خِطْبَةِ النِّسَاءِ أَوْ أَكْنَنتُمْ فِي أَنفُسِكُمْ ۚ عَلِمَ اللَّهُ أَنَّكُمْ سَتَذْكُرُونَهُنَّ وَلَـٰكِن لَّا تُوَاعِدُوهُنَّ سِرًّا إِلَّا أَن تَقُولُوا قَوْلًا مَّعْرُوفًا ۚ وَلَا تَعْزِمُوا عُقْدَةَ النِّكَاحِ حَتَّىٰ يَبْلُغَ الْكِتَابُ أَجَلَهُ ۚ وَاعْلَمُوا أَنَّ اللَّهَ يَعْلَمُ مَا فِي أَنفُسِكُمْ فَاحْذَرُوهُ ۚ وَاعْلَمُوا أَنَّ اللَّهَ غَفُورٌ حَلِيمٌ',
            'english'       => 'There is no blame upon you for that to which you [indirectly] allude concerning a proposal to women or for what you conceal within yourselves. Allah knows that you will have them in mind. But do not promise them secretly except for saying a proper saying. And do not determine to undertake a marriage contract until the decreed period reaches its end. And know that Allah knows what is within yourselves, so beware of Him. And know that Allah is Forgiving and Forbearing.',
            'bangla'        => 'আর তোমাদের উপরে অপরাধ হবে না তোমরা নারীদের বিবাহের প্রস্তাবে যা আভাসে ইঙ্গিতে প্রকাশ কর, অথবা গোপন রাখো তোমাদের অন্তরে। আল্লাহ্ জানেন যে তোমরা তাদের স্মরণ করবে, কিন্তু ভদ্রভাবে কথাবার্তা বলা ছাড়া গোপনে তাদের সাথে ওয়াদা করো না, আর বিবাহবন্ধন পাকাপাকি করো না যে পর্যন্ত না তাদের নির্ধারিত সময়সীমা পেছোঁয়! আর জেনে রেখো -- আল্লাহ্ নিশ্চয়ই জানেন যা তোমাদের অন্তরে আছে, অতএব তাঁর সম্পর্কে সতর্ক হও, আর জেনে রেখো যে নিঃসন্দেহ আল্লাহ্ ত্রানকর্তা, পরম সহিষ্ণু।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 236,
            'page_no'       => 38,
            'jaz_no'        => 2,
            'arabic'        => 'لَّا جُنَاحَ عَلَيْكُمْ إِن طَلَّقْتُمُ النِّسَاءَ مَا لَمْ تَمَسُّوهُنَّ أَوْ تَفْرِضُوا لَهُنَّ فَرِيضَةً ۚ وَمَتِّعُوهُنَّ عَلَى الْمُوسِعِ قَدَرُهُ وَعَلَى الْمُقْتِرِ قَدَرُهُ مَتَاعًا بِالْمَعْرُوفِ ۖ حَقًّا عَلَى الْمُحْسِنِينَ',
            'english'       => 'There is no blame upon you if you divorce women you have not touched nor specified for them an obligation. But give them [a gift of] compensation - the wealthy according to his capability and the poor according to his capability - a provision according to what is acceptable, a duty upon the doers of good.',
            'bangla'        => 'তোমাদের অপরাধ হবে না যদি তোমরা তালাক দাও স্ত্রীদের যাদের এখনও তোমরা স্পর্শ করো নি বা দেয় যাদের জন্য ধার্য করো নি। আর তাদের জন্য ব্যবস্থা করো, ধনবানের ক্ষেত্রে তার সামর্থ্য অনুসারে ও অভাবীর ক্ষেত্রে তার সামর্থ্য অনুসারে, ব্যবস্থা হবে পুরোদস্তুরভাবে। সৎকর্মীদের জন্য একটি কর্তব্য।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 237,
            'page_no'       => 38,
            'jaz_no'        => 2,
            'arabic'        => 'وَإِن طَلَّقْتُمُوهُنَّ مِن قَبْلِ أَن تَمَسُّوهُنَّ وَقَدْ فَرَضْتُمْ لَهُنَّ فَرِيضَةً فَنِصْفُ مَا فَرَضْتُمْ إِلَّا أَن يَعْفُونَ أَوْ يَعْفُوَ الَّذِي بِيَدِهِ عُقْدَةُ النِّكَاحِ ۚ وَأَن تَعْفُوا أَقْرَبُ لِلتَّقْوَىٰ ۚ وَلَا تَنسَوُا الْفَضْلَ بَيْنَكُمْ ۚ إِنَّ اللَّهَ بِمَا تَعْمَلُونَ بَصِيرٌ',
            'english'       => 'And if you divorce them before you have touched them and you have already specified for them an obligation, then [give] half of what you specified - unless they forego the right or the one in whose hand is the marriage contract foregoes it. And to forego it is nearer to righteousness. And do not forget graciousness between you. Indeed Allah, of whatever you do, is Seeing.',
            'bangla'        => 'কিন্তু যদি তোমরা তাদের তালাক দাও তাদের স্পর্শ করার আগে এবং ইতিমধ্যে দেয় তাদের জন্য ধার্য করে ফেলেছ, যা ধার্য করেছ তার অর্ধেক, যদি না তারা মাফ করে দেয় অথবা তারা মাফ করে দেয় যাদের হাতে রয়েছে বিবাহ-গ্রন্থি। আর যদি তোমরা দাবি ছেড়ে দাও তবে তা ধর্মপরায়ণতার অধিকতর নিকটবর্তী। আর তোমাদের পরস্পরের মধ্যে সদয়তা ভুলে যেয়ো না। নিঃসন্দেহ তোমরা যা করো আল্লাহ্ তার দর্শক।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 238,
            'page_no'       => 39,
            'jaz_no'        => 2,
            'arabic'        => 'حَافِظُوا عَلَى الصَّلَوَاتِ وَالصَّلَاةِ الْوُسْطَىٰ وَقُومُوا لِلَّهِ قَانِتِينَ',
            'english'       => 'Maintain with care the [obligatory] prayers and [in particular] the middle prayer and stand before Allah, devoutly obedient.',
            'bangla'        => 'হেফাজত করো নামাযগুলোর, বিশেষ করে সর্বোৎকৃষ্ট নামায, আর তোমরা খাড়া থেকো আল্লাহ্‌র উদ্দেশ্যে পরম বিনয়ে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 239,
            'page_no'       => 39,
            'jaz_no'        => 2,
            'arabic'        => 'فَإِنْ خِفْتُمْ فَرِجَالًا أَوْ رُكْبَانًا ۖ فَإِذَا أَمِنتُمْ فَاذْكُرُوا اللَّهَ كَمَا عَلَّمَكُم مَّا لَمْ تَكُونُوا تَعْلَمُونَ',
            'english'       => 'And if you fear [an enemy, then pray] on foot or riding. But when you are secure, then remember Allah [in prayer], as He has taught you that which you did not [previously] know.',
            'bangla'        => 'কিন্তু যদি তোমরা আশঙ্কা কর তবে পায়ে চলে বা ঘোড়ায় চড়ে, কিন্তু যখন তোমরা নিরাপত্তা বোধ কর তখন আল্লাহ্‌কে স্মরণ করো যে ভাবে তিনি তোমাদের শিখিয়েছেন -- যা তোমরা ইতিপূর্বে জানতে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 240,
            'page_no'       => 39,
            'jaz_no'        => 2,
            'arabic'        => 'وَالَّذِينَ يُتَوَفَّوْنَ مِنكُمْ وَيَذَرُونَ أَزْوَاجًا وَصِيَّةً لِّأَزْوَاجِهِم مَّتَاعًا إِلَى الْحَوْلِ غَيْرَ إِخْرَاجٍ ۚ فَإِنْ خَرَجْنَ فَلَا جُنَاحَ عَلَيْكُمْ فِي مَا فَعَلْنَ فِي أَنفُسِهِنَّ مِن مَّعْرُوفٍ ۗ وَاللَّهُ عَزِيزٌ حَكِيمٌ',
            'english'       => 'And those who are taken in death among you and leave wives behind - for their wives is a bequest: maintenance for one year without turning [them] out. But if they leave [of their own accord], then there is no blame upon you for what they do with themselves in an acceptable way. And Allah is Exalted in Might and Wise.',
            'bangla'        => 'আর তোমাদের মধ্যে যারা মারা যায় এবং রেখে যায় স্ত্রীদের, তাদের স্ত্রীদের জন্য এক বছরের ভরণ-পোষণের ওসিয়ৎ হওয়া চাই, তাদের বহিস্কার না ক’রে, কিন্তু তারা যদি চলে যায় তবে তোমাদের উপরে অপরাধ হবে না যা তারা নিজেদের ব্যাপারে সুসঙ্গতভাবে করে। আর আল্লাহ্ মহাশক্তিশালী, পরমজ্ঞানী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 241,
            'page_no'       => 39,
            'jaz_no'        => 2,
            'arabic'        => 'وَلِلْمُطَلَّقَاتِ مَتَاعٌ بِالْمَعْرُوفِ ۖ حَقًّا عَلَى الْمُتَّقِينَ',
            'english'       => 'And for divorced women is a provision according to what is acceptable - a duty upon the righteous.',
            'bangla'        => 'আর তালাক দেয়া নারীদের জন্যে ব্যবস্থা চাই পুরোদস্তুর মতে, ধর্মপরায়ণদের জন্য একটি কর্তব্য।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 242,
            'page_no'       => 39,
            'jaz_no'        => 2,
            'arabic'        => 'كَذَٰلِكَ يُبَيِّنُ اللَّهُ لَكُمْ آيَاتِهِ لَعَلَّكُمْ تَعْقِلُونَ',
            'english'       => 'Thus does Allah make clear to you His verses that you might use reason.',
            'bangla'        => 'এইভাবে আল্লাহ্ তোমাদের জন্য তাঁর বাণীসমূহ সুস্পষ্ট করে দিয়েছেন যেন তোমরা বুঝতে পার।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 243,
            'page_no'       => 39,
            'jaz_no'        => 2,
            'arabic'        => 'أَلَمْ تَرَ إِلَى الَّذِينَ خَرَجُوا مِن دِيَارِهِمْ وَهُمْ أُلُوفٌ حَذَرَ الْمَوْتِ فَقَالَ لَهُمُ اللَّهُ مُوتُوا ثُمَّ أَحْيَاهُمْ ۚ إِنَّ اللَّهَ لَذُو فَضْلٍ عَلَى النَّاسِ وَلَـٰكِنَّ أَكْثَرَ النَّاسِ لَا يَشْكُرُونَ',
            'english'       => 'Have you not considered those who left their homes in many thousands, fearing death? Allah said to them, "Die"; then He restored them to life. And Allah is full of bounty to the people, but most of the people do not show gratitude.',
            'bangla'        => 'তুমি কি তাদের বিষয়ে ভাব নি যারা তাদের বাড়িঘর থেকে বেরিয়ে এসেছিল মৃত্যুর ভয়ে, আর তারা হাজারে হাজারে ছিল? তারপর আল্লাহ্ তাদের বললেন -- \'\'তোমরা মরো’’ এরপর তিনি তাদের জীবনদান করলেন। নিঃসন্দেহ আল্লাহ্ অবশ্যই মানুষের প্রতি অশেষ করুণাময়, কিন্তু অধিকাংশ লোকেই শুকুরানা আদায় করে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 244,
            'page_no'       => 39,
            'jaz_no'        => 2,
            'arabic'        => 'وَقَاتِلُوا فِي سَبِيلِ اللَّهِ وَاعْلَمُوا أَنَّ اللَّهَ سَمِيعٌ عَلِيمٌ',
            'english'       => 'And fight in the cause of Allah and know that Allah is Hearing and Knowing.',
            'bangla'        => 'আর আল্লাহ্‌র রাস্তায় সংগ্রাম করো, আর জেনে রেখো -- নিঃসন্দেহ আল্লাহ্ সর্বশ্রোতা, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 245,
            'page_no'       => 39,
            'jaz_no'        => 2,
            'arabic'        => 'مَّن ذَا الَّذِي يُقْرِضُ اللَّهَ قَرْضًا حَسَنًا فَيُضَاعِفَهُ لَهُ أَضْعَافًا كَثِيرَةً ۚ وَاللَّهُ يَقْبِضُ وَيَبْسُطُ وَإِلَيْهِ تُرْجَعُونَ',
            'english'       => 'Who is it that would loan Allah a goodly loan so He may multiply it for him many times over? And it is Allah who withholds and grants abundance, and to Him you will be returned.',
            'bangla'        => 'কে আছে যে আল্লাহ্‌কে কর্জ দেবে সর্বাঙ্গসুন্দর ঋণ? তিনি তখন তা বাড়িয়ে দেবেন তার জন্য বহুগুণিত করে। আর আল্লাহ্ গ্রহণ করেন ও তিনি সম্প্রসারণ করেন আর তাঁরই কাছে তোমাদের ফিরিয়ে নেয়া হবে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 246,
            'page_no'       => 40,
            'jaz_no'        => 2,
            'arabic'        => 'أَلَمْ تَرَ إِلَى الْمَلَإِ مِن بَنِي إِسْرَائِيلَ مِن بَعْدِ مُوسَىٰ إِذْ قَالُوا لِنَبِيٍّ لَّهُمُ ابْعَثْ لَنَا مَلِكًا نُّقَاتِلْ فِي سَبِيلِ اللَّهِ ۖ قَالَ هَلْ عَسَيْتُمْ إِن كُتِبَ عَلَيْكُمُ الْقِتَالُ أَلَّا تُقَاتِلُوا ۖ قَالُوا وَمَا لَنَا أَلَّا نُقَاتِلَ فِي سَبِيلِ اللَّهِ وَقَدْ أُخْرِجْنَا مِن دِيَارِنَا وَأَبْنَائِنَا ۖ فَلَمَّا كُتِبَ عَلَيْهِمُ الْقِتَالُ تَوَلَّوْا إِلَّا قَلِيلًا مِّنْهُمْ ۗ وَاللَّهُ عَلِيمٌ بِالظَّالِمِينَ',
            'english'       => 'Have you not considered the assembly of the Children of Israel after [the time of] Moses when they said to a prophet of theirs, "Send to us a king, and we will fight in the way of Allah "? He said, "Would you perhaps refrain from fighting if fighting was prescribed for you?" They said, "And why should we not fight in the cause of Allah when we have been driven out from our homes and from our children?" But when fighting was prescribed for them, they turned away, except for a few of them. And Allah is Knowing of the wrongdoers.',
            'bangla'        => 'তুমি কি মূসার পরবর্তীকালে ইসরাইলের বংশধরদের প্রধানদের বিষয়ে ভেবে দেখ নি, যখন তারা তাদের নবীকে বলেছিল -- \'\'আমাদের জন্য একজন রাজা উত্থাপন করো যেন আমরা আল্লাহ্‌র পথে লড়তে পারি’’? তিনি বলেছিলেন -- \'\'এমনটা কি তোমাদের হবে যে তোমাদের জন্য যুদ্ধ বিধিবদ্ধ করা হলে তোমরা যুদ্ধ করবে না?’’ তারা বলেছিল -- \'\'আমাদের কী হয়েছে যে আমরা আল্লাহ্‌র পথে যুদ্ধ করবো না যখন আমরা আমাদের বাড়িঘর ও সন্তান-সন্ততি থেকে বিতাড়িত হয়েছি?’’ কিন্তু যখন তাদের জন্য যুদ্ধ বিধিবদ্ধ করা হলো, তারা ফিরে দাঁড়াল তাদের মধ্যের অল্প কয়েকজন ছাড়া। আর আল্লাহ্ অন্যায়কারীদের সন্বন্ধে সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 247,
            'page_no'       => 40,
            'jaz_no'        => 2,
            'arabic'        => 'وَقَالَ لَهُمْ نَبِيُّهُمْ إِنَّ اللَّهَ قَدْ بَعَثَ لَكُمْ طَالُوتَ مَلِكًا ۚ قَالُوا أَنَّىٰ يَكُونُ لَهُ الْمُلْكُ عَلَيْنَا وَنَحْنُ أَحَقُّ بِالْمُلْكِ مِنْهُ وَلَمْ يُؤْتَ سَعَةً مِّنَ الْمَالِ ۚ قَالَ إِنَّ اللَّهَ اصْطَفَاهُ عَلَيْكُمْ وَزَادَهُ بَسْطَةً فِي الْعِلْمِ وَالْجِسْمِ ۖ وَاللَّهُ يُؤْتِي مُلْكَهُ مَن يَشَاءُ ۚ وَاللَّهُ وَاسِعٌ عَلِيمٌ',
            'english'       => 'And their prophet said to them, "Indeed, Allah has sent to you Saul as a king." They said, "How can he have kingship over us while we are more worthy of kingship than him and he has not been given any measure of wealth?" He said, "Indeed, Allah has chosen him over you and has increased him abundantly in knowledge and stature. And Allah gives His sovereignty to whom He wills. And Allah is all-Encompassing [in favor] and Knowing."',
            'bangla'        => 'আর তাদের নবী তাদের বলেছিলেন -- \'\'নিশ্চয়ই আল্লাহ্ এখন তোমাদের জন্য তালুতকে রাজা করেছেন।’’ তারা বললে -- \'\'সে কেমন ক’রে আমাদের উপরে রাজত্ব পেতে পারে যখন রাজত্বে তার চাইতে আমাদেরই বেশী দাবী, আর তাকে ধনদৌলতের প্রাচুর্যও প্রদান করা হয় নি? তিনি বললেন -- \'\'নিশ্চয় আল্লাহ্ তাকে মনোনীত করেছেন তোমাদের উপরে, আর তিনি তাকে অগাধভাবে প্রাচুর্যও দিয়েছেন জ্ঞানে ও দেহে। আর আল্লাহ্ তাঁর রাজত্ব দেন যাকে ইচ্ছে করেন, কারণ আল্লাহ্ সর্বব্যাপ্ত, সর্বজ্ঞাতা।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 248,
            'page_no'       => 40,
            'jaz_no'        => 2,
            'arabic'        => 'وَقَالَ لَهُمْ نَبِيُّهُمْ إِنَّ آيَةَ مُلْكِهِ أَن يَأْتِيَكُمُ التَّابُوتُ فِيهِ سَكِينَةٌ مِّن رَّبِّكُمْ وَبَقِيَّةٌ مِّمَّا تَرَكَ آلُ مُوسَىٰ وَآلُ هَارُونَ تَحْمِلُهُ الْمَلَائِكَةُ ۚ إِنَّ فِي ذَٰلِكَ لَآيَةً لَّكُمْ إِن كُنتُم مُّؤْمِنِينَ',
            'english'       => 'And their prophet said to them, "Indeed, a sign of his kingship is that the chest will come to you in which is assurance from your Lord and a remnant of what the family of Moses and the family of Aaron had left, carried by the angels. Indeed in that is a sign for you, if you are believers."',
            'bangla'        => 'আর তাদের নবী তাদের বলেছিলেন -- \'\'নিঃসন্দেহ তার রাজত্বের লক্ষণ এই যে তোমাদের কাছে আসবে \'তাবুত’ যাতে আছে তোমাদের প্রভুর তরফ থেকে প্রশান্তি, এবং মূসার বংশধরেরা ও হারূনের অনুগামীরা যা ছেড়ে গেছেন তার শ্রেষ্ঠাংশ, -- তা বহন করছে ফিরিশ্‌তারা। নিঃসন্দেহ এতে আছে তোমাদের জন্য নিদর্শন যদি তোমরা বিশ্বাসী হয়ে থাকো।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 249,
            'page_no'       => 41,
            'jaz_no'        => 2,
            'arabic'        => 'فَلَمَّا فَصَلَ طَالُوتُ بِالْجُنُودِ قَالَ إِنَّ اللَّهَ مُبْتَلِيكُم بِنَهَرٍ فَمَن شَرِبَ مِنْهُ فَلَيْسَ مِنِّي وَمَن لَّمْ يَطْعَمْهُ فَإِنَّهُ مِنِّي إِلَّا مَنِ اغْتَرَفَ غُرْفَةً بِيَدِهِ ۚ فَشَرِبُوا مِنْهُ إِلَّا قَلِيلًا مِّنْهُمْ ۚ فَلَمَّا جَاوَزَهُ هُوَ وَالَّذِينَ آمَنُوا مَعَهُ قَالُوا لَا طَاقَةَ لَنَا الْيَوْمَ بِجَالُوتَ وَجُنُودِهِ ۚ قَالَ الَّذِينَ يَظُنُّونَ أَنَّهُم مُّلَاقُو اللَّهِ كَم مِّن فِئَةٍ قَلِيلَةٍ غَلَبَتْ فِئَةً كَثِيرَةً بِإِذْنِ اللَّهِ ۗ وَاللَّهُ مَعَ الصَّابِرِينَ',
            'english'       => 'And when Saul went forth with the soldiers, he said, "Indeed, Allah will be testing you with a river. So whoever drinks from it is not of me, and whoever does not taste it is indeed of me, excepting one who takes [from it] in the hollow of his hand." But they drank from it, except a [very] few of them. Then when he had crossed it along with those who believed with him, they said, "There is no power for us today against Goliath and his soldiers." But those who were certain that they would meet Allah said, "How many a small company has overcome a large company by permission of Allah. And Allah is with the patient."',
            'bangla'        => 'তারপর তালুত যখন সৈন্যদল নিয়ে অভিযান করলেন তখন বললেন -- \'\'নিশ্চয় আল্লাহ্ তোমাদের পরীক্ষা করবেন একটি নদী দিয়ে; তাই যে কেউ তার থেকে পান করবে সে আমার নয়, আর যে এর স্বাদ গ্রহণ করবে না সে নিঃসন্দেহ আমার, শুধু সে ছাড়া যে তার হাতে কোষ-পরিমাণ পান করে।’’ কিন্তু তাদের অল্প কয়েকজন ছাড়া তারা তা থেকে পান করেছিল। তারপর তিনি যখন উহা পার হয়ে গেলেন, তিনি ও যারা তাঁর সাথে ঈমান এনেছে, তারা বললে -- \'\'আজ আমাদের শক্তি নেই জালুত এবং তার সৈন্যদলের বিরুদ্ধে।’’ যারা নিশ্চিত ছিল যে তারা অবশ্যই আল্লাহ্‌র সাথে মুলাকাত করতে যাচ্ছে, তারা বললে -- \'\'কতবার ছোট দল আল্লাহ্‌র হুকুমে বড় দলকে পরাজিত করেছে, আর আল্লাহ্ অধ্যবসায়ীদের সাথে আছেন’’।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 250,
            'page_no'       => 41,
            'jaz_no'        => 2,
            'arabic'        => 'وَلَمَّا بَرَزُوا لِجَالُوتَ وَجُنُودِهِ قَالُوا رَبَّنَا أَفْرِغْ عَلَيْنَا صَبْرًا وَثَبِّتْ أَقْدَامَنَا وَانصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ',
            'english'       => 'And when they went forth to [face] Goliath and his soldiers, they said, "Our Lord, pour upon us patience and plant firmly our feet and give us victory over the disbelieving people."',
            'bangla'        => 'আর যখন তারা জালুতের ও তার সৈন্যদলের মুখোমুখি হলো, তারা বললে -- \'\'আমাদের প্রভু! আমাদের প্রতি অধ্যবসায় বর্ষণ করো, আর আমাদের পদক্ষেপ মজবুত করো, আর অবিশ্বাসী দলের বিরুদ্ধে সাহায্য করো।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 251,
            'page_no'       => 41,
            'jaz_no'        => 2,
            'arabic'        => 'فَهَزَمُوهُم بِإِذْنِ اللَّهِ وَقَتَلَ دَاوُودُ جَالُوتَ وَآتَاهُ اللَّهُ الْمُلْكَ وَالْحِكْمَةَ وَعَلَّمَهُ مِمَّا يَشَاءُ ۗ وَلَوْلَا دَفْعُ اللَّهِ النَّاسَ بَعْضَهُم بِبَعْضٍ لَّفَسَدَتِ الْأَرْضُ وَلَـٰكِنَّ اللَّهَ ذُو فَضْلٍ عَلَى الْعَالَمِينَ',
            'english'       => 'So they defeated them by permission of Allah, and David killed Goliath, and Allah gave him the kingship and prophethood and taught him from that which He willed. And if it were not for Allah checking [some] people by means of others, the earth would have been corrupted, but Allah is full of bounty to the worlds.',
            'bangla'        => 'অতএব আল্লাহ্‌র হুকুমে তারা তাদের পরাজিত করল, আর দাউদ হত্যা করলেন জালুতকে, আর আল্লাহ্ তাঁকে রাজত্ব ও জ্ঞান দিলেন, আর তাঁকে শেখালেন যা তিনি ইচ্ছা করলেন। আব মানুষদের যদি আল্লাহ্‌র প্রতিহতকরণ না হতো -- তাদের এক দলকে অন্য দলের দ্বারা -- তবে পৃথিবী নিঃসন্দেহ অরাজকতাপূর্ণ হতো। কিন্তু আল্লাহ্ সমস্ত সৃষ্টজগতের প্রতি অশেষ কৃপাময়।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 252,
            'page_no'       => 41,
            'jaz_no'        => 2,
            'arabic'        => 'تِلْكَ آيَاتُ اللَّهِ نَتْلُوهَا عَلَيْكَ بِالْحَقِّ ۚ وَإِنَّكَ لَمِنَ الْمُرْسَلِينَ',
            'english'       => 'These are the verses of Allah which We recite to you, [O Muhammad], in truth. And indeed, you are from among the messengers.',
            'bangla'        => 'এইসব হচ্ছে আল্লাহ্‌র বাণী, আমরা তোমার কাছে তা পাঠ করছি যথাযথভাবে, আর নিঃসন্দেহ তুমি রসূলদের অন্যতম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 253,
            'page_no'       => 42,
            'jaz_no'        => 3,
            'arabic'        => 'تِلْكَ الرُّسُلُ فَضَّلْنَا بَعْضَهُمْ عَلَىٰ بَعْضٍ ۘ مِّنْهُم مَّن كَلَّمَ اللَّهُ ۖ وَرَفَعَ بَعْضَهُمْ دَرَجَاتٍ ۚ وَآتَيْنَا عِيسَى ابْنَ مَرْيَمَ الْبَيِّنَاتِ وَأَيَّدْنَاهُ بِرُوحِ الْقُدُسِ ۗ وَلَوْ شَاءَ اللَّهُ مَا اقْتَتَلَ الَّذِينَ مِن بَعْدِهِم مِّن بَعْدِ مَا جَاءَتْهُمُ الْبَيِّنَاتُ وَلَـٰكِنِ اخْتَلَفُوا فَمِنْهُم مَّنْ آمَنَ وَمِنْهُم مَّن كَفَرَ ۚ وَلَوْ شَاءَ اللَّهُ مَا اقْتَتَلُوا وَلَـٰكِنَّ اللَّهَ يَفْعَلُ مَا يُرِيدُ',
            'english'       => 'Those messengers - some of them We caused to exceed others. Among them were those to whom Allah spoke, and He raised some of them in degree. And We gave Jesus, the Son of Mary, clear proofs, and We supported him with the Pure Spirit. If Allah had willed, those [generations] succeeding them would not have fought each other after the clear proofs had come to them. But they differed, and some of them believed and some of them disbelieved. And if Allah had willed, they would not have fought each other, but Allah does what He intends.',
            'bangla'        => 'এইসব রসূল -- তাঁদের কাউকে আমরা অপর কারোর উপরে শ্রেষ্ঠত্ব দিয়েছি। তাঁদের মধ্যে কারোর সাথে আল্লাহ্ কথা বলছেন এবং তাঁদের কাউকে তিনি বহুস্তর উন্নত করেছেন। আর আমরা মরিয়মের পুত্র ঈসাকে দিয়েছিলাম স্পষ্ট প্রমাণাবলী, আর আমরা তাঁকে বলীয়ান করি রূহুল ক্কুদুস্ দিয়ে। আর আল্লাহ্ যদি ইচ্ছা করতেন তবে তাঁদের পরবর্তীরা পরস্পর বিবাদ করতো না তাদের কাছে স্পষ্ট প্রমাণাবলী আসার পরেও, কিন্তু তারা মতবিরোধ করলো, কাজেই তাদের মধ্যে কেউ ঈমান আনলো ও তাদের কেউ অবিশ্বাস পোষণ করলো। কিন্তু আল্লাহ্ যদি ইচ্ছা করতেন তবে তারা পরস্পর লড়াই করতো না, কিন্তু আল্লাহ্ যা ইচ্ছা করেন তাই করে থাকেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 254,
            'page_no'       => 42,
            'jaz_no'        => 3,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا أَنفِقُوا مِمَّا رَزَقْنَاكُم مِّن قَبْلِ أَن يَأْتِيَ يَوْمٌ لَّا بَيْعٌ فِيهِ وَلَا خُلَّةٌ وَلَا شَفَاعَةٌ ۗ وَالْكَافِرُونَ هُمُ الظَّالِمُونَ',
            'english'       => 'O you who have believed, spend from that which We have provided for you before there comes a Day in which there is no exchange and no friendship and no intercession. And the disbelievers - they are the wrongdoers.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! আমরা তোমাদের যা রিযেক দিয়েছি তা থেকে তোমরা খরচ করো সেই দিন আসবার আগে যে দিন দরদস্তুর করা চলবে না, বা বন্ধুত্ব থাকবে না বা সুপারিশ টিকবে না। আর অবিশ্বাসীরা -- তারাই অন্যায়কারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 255,
            'page_no'       => 42,
            'jaz_no'        => 3,
            'arabic'        => 'اللَّهُ لَا إِلَـٰهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ ۚ لَا تَأْخُذُهُ سِنَةٌ وَلَا نَوْمٌ ۚ لَّهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ ۗ مَن ذَا الَّذِي يَشْفَعُ عِندَهُ إِلَّا بِإِذْنِهِ ۚ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ ۖ وَلَا يُحِيطُونَ بِشَيْءٍ مِّنْ عِلْمِهِ إِلَّا بِمَا شَاءَ ۚ وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالْأَرْضَ ۖ وَلَا يَئُودُهُ حِفْظُهُمَا ۚ وَهُوَ الْعَلِيُّ الْعَظِيمُ',
            'english'       => 'Allah - there is no deity except Him, the Ever-Living, the Sustainer of [all] existence. Neither drowsiness overtakes Him nor sleep. To Him belongs whatever is in the heavens and whatever is on the earth. Who is it that can intercede with Him except by His permission? He knows what is [presently] before them and what will be after them, and they encompass not a thing of His knowledge except for what He wills. His Kursi extends over the heavens and the earth, and their preservation tires Him not. And He is the Most High, the Most Great.',
            'bangla'        => 'আল্লাহ্ -- তিনি ছাড়া অন্য উপাস্য নেই, -- চিরজীবন্ত, সদা-বিদ্যমান, তন্দ্রা তাঁকে অভিভূত করতে পারে না, নিদ্রাও নয়। তাঁরই হচ্ছে যা-কিছু আছে মহাকাশমন্ডলে এবং যা-কিছু পৃথিবীতে। কে আছে যে তাঁর দরবারে সুপারিশ করতে পারে তার অনুমতি ছাড়া? তিনি জানেন কি আছে তাদের সামনে এবং কি আছে তাদের পেছনে; আর তাঁর জ্ঞানের কিছুই তারা ধারণা করতে পারে না তিনি যা ইচ্ছা করেন তা ব্যতীত। তাঁর মহাসিংহাসন মহাকাশমন্ডলী ও পৃথিবীতে ব্যাপ্ত; এদের উভয়ের হেফাজত তাঁকে ক্লান্ত করে না, আর তিনি সর্বোচ্চে অধিষ্ঠিত, মহামহিম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 256,
            'page_no'       => 42,
            'jaz_no'        => 3,
            'arabic'        => 'لَا إِكْرَاهَ فِي الدِّينِ ۖ قَد تَّبَيَّنَ الرُّشْدُ مِنَ الْغَيِّ ۚ فَمَن يَكْفُرْ بِالطَّاغُوتِ وَيُؤْمِن بِاللَّهِ فَقَدِ اسْتَمْسَكَ بِالْعُرْوَةِ الْوُثْقَىٰ لَا انفِصَامَ لَهَا ۗ وَاللَّهُ سَمِيعٌ عَلِيمٌ',
            'english'       => 'There shall be no compulsion in [acceptance of] the religion. The right course has become clear from the wrong. So whoever disbelieves in Taghut and believes in Allah has grasped the most trustworthy handhold with no break in it. And Allah is Hearing and Knowing.',
            'bangla'        => 'ধর্মে জবরদস্তি নেই, নিঃসন্দেহ সত্যপথ ভ্রান্তপথ থেকে সুস্পষ্ট করা হয়ে গেছে। অতএব যে তাগুতকে অস্বীকার করে এবং আল্লাহ্‌তে ঈমান আনে সেই তবে ধরেছে একটি শক্ত হাতল, -- তা কখনো ভাঙবার নয়। আর আল্লাহ্ সর্বশ্রোতা, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 257,
            'page_no'       => 43,
            'jaz_no'        => 3,
            'arabic'        => 'اللَّهُ وَلِيُّ الَّذِينَ آمَنُوا يُخْرِجُهُم مِّنَ الظُّلُمَاتِ إِلَى النُّورِ ۖ وَالَّذِينَ كَفَرُوا أَوْلِيَاؤُهُمُ الطَّاغُوتُ يُخْرِجُونَهُم مِّنَ النُّورِ إِلَى الظُّلُمَاتِ ۗ أُولَـٰئِكَ أَصْحَابُ النَّارِ ۖ هُمْ فِيهَا خَالِدُونَ',
            'english'       => 'Allah is the ally of those who believe. He brings them out from darknesses into the light. And those who disbelieve - their allies are Taghut. They take them out of the light into darknesses. Those are the companions of the Fire; they will abide eternally therein.',
            'bangla'        => 'আল্লাহ্ তাদের পৃষ্ঠপোষক যারা ঈমান এনেছে, তিনি অন্ধকার থেকে তাদের আলোতে বের করে আনেন। আর যারা অবিশ্বাস পোষণ করে তাদের পৃষ্ঠপোষক হচ্ছে তাগুত, তারা আলোক থেকে তাদের বের করে অন্ধকারের দিকে নিয়ে যায়। তারাই হচ্ছে আগুনের বাসিন্দা, তারা তাতে থাকবে দীর্ঘকাল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 258,
            'page_no'       => 43,
            'jaz_no'        => 3,
            'arabic'        => 'أَلَمْ تَرَ إِلَى الَّذِي حَاجَّ إِبْرَاهِيمَ فِي رَبِّهِ أَنْ آتَاهُ اللَّهُ الْمُلْكَ إِذْ قَالَ إِبْرَاهِيمُ رَبِّيَ الَّذِي يُحْيِي وَيُمِيتُ قَالَ أَنَا أُحْيِي وَأُمِيتُ ۖ قَالَ إِبْرَاهِيمُ فَإِنَّ اللَّهَ يَأْتِي بِالشَّمْسِ مِنَ الْمَشْرِقِ فَأْتِ بِهَا مِنَ الْمَغْرِبِ فَبُهِتَ الَّذِي كَفَرَ ۗ وَاللَّهُ لَا يَهْدِي الْقَوْمَ الظَّالِمِينَ',
            'english'       => 'Have you not considered the one who argued with Abraham about his Lord [merely] because Allah had given him kingship? When Abraham said, "My Lord is the one who gives life and causes death," he said, "I give life and cause death." Abraham said, "Indeed, Allah brings up the sun from the east, so bring it up from the west." So the disbeliever was overwhelmed [by astonishment], and Allah does not guide the wrongdoing people.',
            'bangla'        => 'তুমি কি তার কথা ভেবে দেখো নি যে ইব্রাহীমের সাথে তাঁর প্রভুর সন্বন্ধে ঝগড়া করছিল যেহেতু আল্লাহ্ তাঁকে রাজত্ব দিয়েছিলেন? স্মরণ করো! ইব্রাহীম বলেছিলেন -- \'\'আমার প্রভু তিনি যিনি জীবনদান করেন এবং মৃত্যু ঘটান।’’ সে বলল -- \'\'আমি জীবন দিয়ে রাখতে পারি এবং মৃত্যু ঘটাতে পারি।’’ ইব্রাহীম বলেছিলেন -- \'\'আল্লাহ্ কিন্তু সূর্যকে পূর্বদিক থেকে নিয়ে আসেন তুমি তাহলে তাকে পশ্চিমদিক থেকে নিয়ে এস।’’ এইভাবে সে হেরে গেল যে অবিশ্বাস পোষণ করেছিল। আর আল্লাহ্ জুলুমকারী জাতিকে হেদায়ত করেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 259,
            'page_no'       => 43,
            'jaz_no'        => 3,
            'arabic'        => 'أَوْ كَالَّذِي مَرَّ عَلَىٰ قَرْيَةٍ وَهِيَ خَاوِيَةٌ عَلَىٰ عُرُوشِهَا قَالَ أَنَّىٰ يُحْيِي هَـٰذِهِ اللَّهُ بَعْدَ مَوْتِهَا ۖ فَأَمَاتَهُ اللَّهُ مِائَةَ عَامٍ ثُمَّ بَعَثَهُ ۖ قَالَ كَمْ لَبِثْتَ ۖ قَالَ لَبِثْتُ يَوْمًا أَوْ بَعْضَ يَوْمٍ ۖ قَالَ بَل لَّبِثْتَ مِائَةَ عَامٍ فَانظُرْ إِلَىٰ طَعَامِكَ وَشَرَابِكَ لَمْ يَتَسَنَّهْ ۖ وَانظُرْ إِلَىٰ حِمَارِكَ وَلِنَجْعَلَكَ آيَةً لِّلنَّاسِ ۖ وَانظُرْ إِلَى الْعِظَامِ كَيْفَ نُنشِزُهَا ثُمَّ نَكْسُوهَا لَحْمًا ۚ فَلَمَّا تَبَيَّنَ لَهُ قَالَ أَعْلَمُ أَنَّ اللَّهَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
            'english'       => 'Or [consider such an example] as the one who passed by a township which had fallen into ruin. He said, "How will Allah bring this to life after its death?" So Allah caused him to die for a hundred years; then He revived him. He said, "How long have you remained?" The man said, "I have remained a day or part of a day." He said, "Rather, you have remained one hundred years. Look at your food and your drink; it has not changed with time. And look at your donkey; and We will make you a sign for the people. And look at the bones [of this donkey] - how We raise them and then We cover them with flesh." And when it became clear to him, he said, "I know that Allah is over all things competent."',
            'bangla'        => 'অথবা, তাঁর কথা যিনি যাচ্ছিলেন এক শহরের পাশ দিয়ে, আর তা ভেঙ্গে পড়েছিল তার ছাদ সহ? তিনি বলেছিলেন -- \'\'কেমন ক’রে আল্লাহ্ একে পুনরুজ্জীবিত করবেন তার মৃত্যুর পরে?’’ এরপর আল্লাহ্ তাঁকে শতবৎসরকাল মৃতবৎ করে রাখলেন, তারপর তিনি তাঁকে পুনরুত্থিত করলেন। তিনি বললেন -- \'\'কত সময় তুমি কাটিয়েছ?’’ তিনি বললেন -- \'\'আমি কাটিয়েছি একটি দিন, বা এক দিনের কিছু অংশ।’’ তিনি বললেন -- \'\'না, তুমি কাটিয়েছ একশত বছর, কাজেই তোমার খাদ্য ও তোমার পানীয়ের দিকে তাকাও, বয়স উহাকে বয়স্ক করে নি, আর তোমার গাধার দিকে তাকাও, আর যেন তোমাকে মানবগোষ্ঠীর জন্য নিদর্শন করতে পারি, আর এই হাড়গুলোর দিকে তাকাও, কেমন ক’রে আমরা সে-সব গুছিয়েছি ও সেগুলোকে মাংস দিয়ে ঢেকেছি।’’ আর যখন তাঁর কাছে পরিস্কার হলো তিনি বললেন -- \'\'আমি এখন জানি যে আল্লাহ্ সব-কিছুর উপরে সর্বশক্তিমান।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 260,
            'page_no'       => 44,
            'jaz_no'        => 3,
            'arabic'        => 'وَإِذْ قَالَ إِبْرَاهِيمُ رَبِّ أَرِنِي كَيْفَ تُحْيِي الْمَوْتَىٰ ۖ قَالَ أَوَلَمْ تُؤْمِن ۖ قَالَ بَلَىٰ وَلَـٰكِن لِّيَطْمَئِنَّ قَلْبِي ۖ قَالَ فَخُذْ أَرْبَعَةً مِّنَ الطَّيْرِ فَصُرْهُنَّ إِلَيْكَ ثُمَّ اجْعَلْ عَلَىٰ كُلِّ جَبَلٍ مِّنْهُنَّ جُزْءًا ثُمَّ ادْعُهُنَّ يَأْتِينَكَ سَعْيًا ۚ وَاعْلَمْ أَنَّ اللَّهَ عَزِيزٌ حَكِيمٌ',
            'english'       => 'And [mention] when Abraham said, "My Lord, show me how You give life to the dead." [Allah] said, "Have you not believed?" He said, "Yes, but [I ask] only that my heart may be satisfied." [Allah] said, "Take four birds and commit them to yourself. Then [after slaughtering them] put on each hill a portion of them; then call them - they will come [flying] to you in haste. And know that Allah is Exalted in Might and Wise."',
            'bangla'        => 'আর স্মরণ করো! ইব্রাহীন বললেন -- \'\'আমার প্রভু! আমাকে দেখাও কেমন করে তুমি মৃতকে জীবিত করো।’’ তিনি বললেন -- \'\'তুমি কি বিশ্বাস করো না?’’ তিনি বললেন,\'\'না, তবে যাতে আমার হৃদয় শান্ত হয়।’’ তিনি বললেন -- \'\'তা হলে পাখীদের চারটি তুমি নাও ও তাদের তোমার প্রতি অনুগত করো, তারপর প্রতিটি পাহাড়ে তাদের এক একটি অংশ স্থাপন করো, তারপর তাদের ডাক দাও, তারা ছুটে আসবে তোমার কাছে। আর জেনে রেখো, নিঃসন্দেহ আল্লাহ্ মহাশক্তিশালী, পরমজ্ঞানী।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 261,
            'page_no'       => 44,
            'jaz_no'        => 3,
            'arabic'        => 'مَّثَلُ الَّذِينَ يُنفِقُونَ أَمْوَالَهُمْ فِي سَبِيلِ اللَّهِ كَمَثَلِ حَبَّةٍ أَنبَتَتْ سَبْعَ سَنَابِلَ فِي كُلِّ سُنبُلَةٍ مِّائَةُ حَبَّةٍ ۗ وَاللَّهُ يُضَاعِفُ لِمَن يَشَاءُ ۗ وَاللَّهُ وَاسِعٌ عَلِيمٌ',
            'english'       => 'The example of those who spend their wealth in the way of Allah is like a seed [of grain] which grows seven spikes; in each spike is a hundred grains. And Allah multiplies [His reward] for whom He wills. And Allah is all-Encompassing and Knowing.',
            'bangla'        => 'যারা তাদের ধনসম্পত্তি আল্লাহ্‌র পথে খরচ করে তাদের উপমা হচ্ছে একটি শস্যবীজের উপমার ন্যায়, তা উৎপাদন করে সাতটি শিষ, প্রতিটি শিষে থাকে একশত শস্য। আর আল্লাহ্ বহুগুণিত করেন যার জন্য ইচ্ছা করেন, কারণ আল্লাহ্‌, মহাদানশীল সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 262,
            'page_no'       => 44,
            'jaz_no'        => 3,
            'arabic'        => 'الَّذِينَ يُنفِقُونَ أَمْوَالَهُمْ فِي سَبِيلِ اللَّهِ ثُمَّ لَا يُتْبِعُونَ مَا أَنفَقُوا مَنًّا وَلَا أَذًى ۙ لَّهُمْ أَجْرُهُمْ عِندَ رَبِّهِمْ وَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ',
            'english'       => 'Those who spend their wealth in the way of Allah and then do not follow up what they have spent with reminders [of it] or [other] injury will have their reward with their Lord, and there will be no fear concerning them, nor will they grieve.',
            'bangla'        => 'যারা তাদের ধনসম্পত্তি আল্লাহ্‌র পথে খরচ ক’রে, তারপর যা তারা খরচ করেছে তারা তার পশ্চাদ্ধাবন করে না কৃতজ্ঞতাপাশে আবদ্ধ করতে বা আঘাত হানতে, তাদের জন্য পুরস্কার আছে তাদের প্রভুর দরবারে, কাজেই তাদের উপরে কোনো ভয় নেই, আর তারা নিজেরা অনুতাপও করবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 263,
            'page_no'       => 44,
            'jaz_no'        => 3,
            'arabic'        => 'قَوْلٌ مَّعْرُوفٌ وَمَغْفِرَةٌ خَيْرٌ مِّن صَدَقَةٍ يَتْبَعُهَا أَذًى ۗ وَاللَّهُ غَنِيٌّ حَلِيمٌ',
            'english'       => 'Kind speech and forgiveness are better than charity followed by injury. And Allah is Free of need and Forbearing.',
            'bangla'        => 'সদয় আলাপ এবং ক্ষমা করা বহু ভালো সেই দানের চেয়ে যাকে অনুসরণ করা হয় উৎপীড়ন দিয়ে। আর আল্লাহ্ স্বয়ং-সমৃদ্ধ, ধৈর্যশীল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 264,
            'page_no'       => 44,
            'jaz_no'        => 3,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا لَا تُبْطِلُوا صَدَقَاتِكُم بِالْمَنِّ وَالْأَذَىٰ كَالَّذِي يُنفِقُ مَالَهُ رِئَاءَ النَّاسِ وَلَا يُؤْمِنُ بِاللَّهِ وَالْيَوْمِ الْآخِرِ ۖ فَمَثَلُهُ كَمَثَلِ صَفْوَانٍ عَلَيْهِ تُرَابٌ فَأَصَابَهُ وَابِلٌ فَتَرَكَهُ صَلْدًا ۖ لَّا يَقْدِرُونَ عَلَىٰ شَيْءٍ مِّمَّا كَسَبُوا ۗ وَاللَّهُ لَا يَهْدِي الْقَوْمَ الْكَافِرِينَ',
            'english'       => 'O you who have believed, do not invalidate your charities with reminders or injury as does one who spends his wealth [only] to be seen by the people and does not believe in Allah and the Last Day. His example is like that of a [large] smooth stone upon which is dust and is hit by a downpour that leaves it bare. They are unable [to keep] anything of what they have earned. And Allah does not guide the disbelieving people.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! তোমাদের দানখয়রাতকে ব্যর্থ করে দিয়ো না কৃতজ্ঞতাপাশে আবদ্ধ করে ও আঘাত হেনে, তার মতো যে তার ধনসম্পত্তি খরচ করে লোকদের দেখানোর জন্যে এবং যে ঈমান আনে না আল্লাহ্‌র প্রতি ও আখেরাতের দিনে। কাজেই তার উদাহরণ হচ্ছে মসৃণ পাথরের উপমার মতো, যার উপরে আছে ধুলোমাটি, তখন তার উপরে নামে ঝড়বৃষ্টি, গতিকে তাকে ফেলে রাখে খালি করে! তারা যা অর্জন করেছে তার কোনো-কিছুর উপরেও তাদের কর্তৃত্ব থকে না। আর আল্লাহ্ অবিশ্বাসী লোকদের হেদায়ত করেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 265,
            'page_no'       => 45,
            'jaz_no'        => 3,
            'arabic'        => 'وَمَثَلُ الَّذِينَ يُنفِقُونَ أَمْوَالَهُمُ ابْتِغَاءَ مَرْضَاتِ اللَّهِ وَتَثْبِيتًا مِّنْ أَنفُسِهِمْ كَمَثَلِ جَنَّةٍ بِرَبْوَةٍ أَصَابَهَا وَابِلٌ فَآتَتْ أُكُلَهَا ضِعْفَيْنِ فَإِن لَّمْ يُصِبْهَا وَابِلٌ فَطَلٌّ ۗ وَاللَّهُ بِمَا تَعْمَلُونَ بَصِيرٌ',
            'english'       => 'And the example of those who spend their wealth seeking means to the approval of Allah and assuring [reward for] themselves is like a garden on high ground which is hit by a downpour - so it yields its fruits in double. And [even] if it is not hit by a downpour, then a drizzle [is sufficient]. And Allah, of what you do, is Seeing.',
            'bangla'        => 'আর যারা তাদের ধনদৌলত খরচ করে আল্লাহ্‌র সন্তষ্টি কামনা ক’রে এবং তাদের আ‌ত্মার দৃঢ়প্রত্যয় জন্মাবার জন্যে, তাদের উদাহরণ হচ্ছে টিলার উপরের বাগানের উপমার মতো, যার উপরে নামে বৃষ্টিধারা, তাতে তার ফল দ্বিগুণ হয়ে আসে, আর যদি তাতে বৃষ্টিধারা নাও নামে তবে শিশিরপাত। আর তারা যা করে আল্লাহ্ তার দর্শক।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 266,
            'page_no'       => 45,
            'jaz_no'        => 3,
            'arabic'        => 'أَيَوَدُّ أَحَدُكُمْ أَن تَكُونَ لَهُ جَنَّةٌ مِّن نَّخِيلٍ وَأَعْنَابٍ تَجْرِي مِن تَحْتِهَا الْأَنْهَارُ لَهُ فِيهَا مِن كُلِّ الثَّمَرَاتِ وَأَصَابَهُ الْكِبَرُ وَلَهُ ذُرِّيَّةٌ ضُعَفَاءُ فَأَصَابَهَا إِعْصَارٌ فِيهِ نَارٌ فَاحْتَرَقَتْ ۗ كَذَٰلِكَ يُبَيِّنُ اللَّهُ لَكُمُ الْآيَاتِ لَعَلَّكُمْ تَتَفَكَّرُونَ',
            'english'       => 'Would one of you like to have a garden of palm trees and grapevines underneath which rivers flow in which he has from every fruit? But he is afflicted with old age and has weak offspring, and it is hit by a whirlwind containing fire and is burned. Thus does Allah make clear to you [His] verses that you might give thought.',
            'bangla'        => 'তোমাদের মধ্যে কি কেউ আশা করে যে তার খেজুর ও আঙ্গুরের বাগান হোক, যার নিচে দিয়ে বয়ে চলে ঝরনারাজি, অথচ তার সন্তানরা দুর্বল, এমতাবস্থায় তাকে পাকড়ালো ঘুর্ণিঝড়ে, যাতে রয়েছে আগুনের হলকা, ফলে তা পুড়ে গেল! এইভাবে আল্লাহ্ তোমাদের জন্য তাঁর বাণীসমূহ সুস্পষ্ট করে থাকেন যেন তোমরা চিন্তা করতে পার।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 267,
            'page_no'       => 45,
            'jaz_no'        => 3,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا أَنفِقُوا مِن طَيِّبَاتِ مَا كَسَبْتُمْ وَمِمَّا أَخْرَجْنَا لَكُم مِّنَ الْأَرْضِ ۖ وَلَا تَيَمَّمُوا الْخَبِيثَ مِنْهُ تُنفِقُونَ وَلَسْتُم بِآخِذِيهِ إِلَّا أَن تُغْمِضُوا فِيهِ ۚ وَاعْلَمُوا أَنَّ اللَّهَ غَنِيٌّ حَمِيدٌ',
            'english'       => 'O you who have believed, spend from the good things which you have earned and from that which We have produced for you from the earth. And do not aim toward the defective therefrom, spending [from that] while you would not take it [yourself] except with closed eyes. And know that Allah is Free of need and Praiseworthy.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! খরচ করো ভালো বিষয়বস্তু যা তোমরা উপার্জন কর, আর যা আমরা তোমাদের জন্য মাটি থেকে উৎপাদন করে থাকি তা থেকে, আর যা নিকৃষ্ট তা থেকে খরচ করতে সংকল্প করো না যখন তোমরা নিজেরা তার গ্রহণকারী হও না, এর প্রতি উপেক্ষা করা ছাড়া। আর জেনে রেখো, নিঃসন্দেহ আল্লাহ্ স্বয়ংসমৃদ্ধ, পরম প্রশংসিত।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 268,
            'page_no'       => 45,
            'jaz_no'        => 3,
            'arabic'        => 'الشَّيْطَانُ يَعِدُكُمُ الْفَقْرَ وَيَأْمُرُكُم بِالْفَحْشَاءِ ۖ وَاللَّهُ يَعِدُكُم مَّغْفِرَةً مِّنْهُ وَفَضْلًا ۗ وَاللَّهُ وَاسِعٌ عَلِيمٌ',
            'english'       => 'Satan threatens you with poverty and orders you to immorality, while Allah promises you forgiveness from Him and bounty. And Allah is all-Encompassing and Knowing.',
            'bangla'        => 'শয়তান তোমাদের দরিদ্রতার ধমক দেয়, আর তোমাদের তাড়া করে গর্হিত কাজে, অথচ আল্লাহ্ তোমাদের প্রতি‌শ্রুতি দেন তাঁর কাছ থেকে পরিত্রাণের এবং প্রাচুর্যের। আর আল্লাহ্‌, মহাবদান্য, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 269,
            'page_no'       => 45,
            'jaz_no'        => 3,
            'arabic'        => 'يُؤْتِي الْحِكْمَةَ مَن يَشَاءُ ۚ وَمَن يُؤْتَ الْحِكْمَةَ فَقَدْ أُوتِيَ خَيْرًا كَثِيرًا ۗ وَمَا يَذَّكَّرُ إِلَّا أُولُو الْأَلْبَابِ',
            'english'       => 'He gives wisdom to whom He wills, and whoever has been given wisdom has certainly been given much good. And none will remember except those of understanding.',
            'bangla'        => 'তিনি জ্ঞানদান করেন যাকে ইছে করেন, আর যাকে জ্ঞান দেওয়া হয় তাকে অবশ্যই অপার কল্যাণ দেওয়া হয়েছে। আর বোধশক্তির অধিকারী ছাড়া অন্য কেউ বুঝতে পারে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 270,
            'page_no'       => 46,
            'jaz_no'        => 3,
            'arabic'        => 'وَمَا أَنفَقْتُم مِّن نَّفَقَةٍ أَوْ نَذَرْتُم مِّن نَّذْرٍ فَإِنَّ اللَّهَ يَعْلَمُهُ ۗ وَمَا لِلظَّالِمِينَ مِنْ أَنصَارٍ',
            'english'       => 'And whatever you spend of expenditures or make of vows - indeed, Allah knows of it. And for the wrongdoers there are no helpers.',
            'bangla'        => 'আর দানের জন্য যা-কিছু তোমরা খরচ কর, অথবা ব্রতের মধ্যে যাই তোমরা সংকল্প কর, নিঃসন্দেহ আল্লাহ্ তা জানেন। আর অন্যায়কারীদের জন্য কোনো সাহায্যকারী নেই।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 271,
            'page_no'       => 46,
            'jaz_no'        => 3,
            'arabic'        => 'إِن تُبْدُوا الصَّدَقَاتِ فَنِعِمَّا هِيَ ۖ وَإِن تُخْفُوهَا وَتُؤْتُوهَا الْفُقَرَاءَ فَهُوَ خَيْرٌ لَّكُمْ ۚ وَيُكَفِّرُ عَنكُم مِّن سَيِّئَاتِكُمْ ۗ وَاللَّهُ بِمَا تَعْمَلُونَ خَبِيرٌ',
            'english'       => 'If you disclose your charitable expenditures, they are good; but if you conceal them and give them to the poor, it is better for you, and He will remove from you some of your misdeeds [thereby]. And Allah, with what you do, is [fully] Acquainted.',
            'bangla'        => 'তোমরা যদি দানখয়রাত প্রকাশ কর তবে তা কতো ভালো! আর যদি তা গোপন রেখে দরিদ্রদের দান কর তা হলে তোমাদের জন্য তা আরও মঙ্গলময়! আর তোমাদের গর্হিত ক্রিয়াকর্ম হতে তোমাদের এতে প্রায়শ্চিত হবে। আর তোমরা যা করছো আল্লাহ্ তার ওয়াকিফহাল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 272,
            'page_no'       => 46,
            'jaz_no'        => 3,
            'arabic'        => 'لَّيْسَ عَلَيْكَ هُدَاهُمْ وَلَـٰكِنَّ اللَّهَ يَهْدِي مَن يَشَاءُ ۗ وَمَا تُنفِقُوا مِنْ خَيْرٍ فَلِأَنفُسِكُمْ ۚ وَمَا تُنفِقُونَ إِلَّا ابْتِغَاءَ وَجْهِ اللَّهِ ۚ وَمَا تُنفِقُوا مِنْ خَيْرٍ يُوَفَّ إِلَيْكُمْ وَأَنتُمْ لَا تُظْلَمُونَ',
            'english'       => 'Not upon you, [O Muhammad], is [responsibility for] their guidance, but Allah guides whom He wills. And whatever good you [believers] spend is for yourselves, and you do not spend except seeking the countenance of Allah. And whatever you spend of good - it will be fully repaid to you, and you will not be wronged.',
            'bangla'        => 'তাদের হেদায়ত করার দায়িত্ব তোমার উপরে নয়, কিন্তু আল্লাহ্ হেদায়ত করেন যাদের তিনি ইচ্ছা করেন। আর ভালো জিনিসের যা-কিছু তোমরা খরচ কর তা তোমাদের নিজেদের জন্য, আর তোমরা আল্লাহ্‌র সন্তষ্টি লাভের উদ্দেশ্যে ছাড়া খরচ করো না। আর ভালো যা-কিছু তোমরা খরচ কর তা তোমাদের পুরোপুরি প্রদান করা হবে, আর তোমাদের প্রতি অন্যায় করা হবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 273,
            'page_no'       => 46,
            'jaz_no'        => 3,
            'arabic'        => 'لِلْفُقَرَاءِ الَّذِينَ أُحْصِرُوا فِي سَبِيلِ اللَّهِ لَا يَسْتَطِيعُونَ ضَرْبًا فِي الْأَرْضِ يَحْسَبُهُمُ الْجَاهِلُ أَغْنِيَاءَ مِنَ التَّعَفُّفِ تَعْرِفُهُم بِسِيمَاهُمْ لَا يَسْأَلُونَ النَّاسَ إِلْحَافًا ۗ وَمَا تُنفِقُوا مِنْ خَيْرٍ فَإِنَّ اللَّهَ بِهِ عَلِيمٌ',
            'english'       => '[Charity is] for the poor who have been restricted for the cause of Allah, unable to move about in the land. An ignorant [person] would think them self-sufficient because of their restraint, but you will know them by their [characteristic] sign. They do not ask people persistently [or at all]. And whatever you spend of good - indeed, Allah is Knowing of it.',
            'bangla'        => 'দরিদ্রদের জন্য যারা আল্লাহ্‌র পথে আটকা পড়ে রয়েছে, -- তারা পৃথিবীতে চলাফেরা করতে অপারগ। অজানা লোকে তাদের ধনী বলে ভাবে তাদের বিরত থাকার দরুন। তুমি তাদের চিনতে পারবে তাদের চেহারাতে। তারা লোকের কাছে ধরনা দিয়ে ভিক্ষা করে না। আর ভালো জিনিসের যা-কিছু তোমরা খরচ করো সে-সন্বন্ধে আল্লাহ্ নিশ্চয় সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 274,
            'page_no'       => 46,
            'jaz_no'        => 3,
            'arabic'        => 'الَّذِينَ يُنفِقُونَ أَمْوَالَهُم بِاللَّيْلِ وَالنَّهَارِ سِرًّا وَعَلَانِيَةً فَلَهُمْ أَجْرُهُمْ عِندَ رَبِّهِمْ وَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ',
            'english'       => 'Those who spend their wealth [in Allah \'s way] by night and by day, secretly and publicly - they will have their reward with their Lord. And no fear will there be concerning them, nor will they grieve.',
            'bangla'        => 'যারা তাদের ধনদৌলত দিবারাত্রি গোপনে ও প্রকাশ্যভাবে খরচ করে থাকে, তাদের জন্যে নিজ নিজ পুরস্কার রয়েছে তাদের প্রভুর দরবারে, আর তাদের উপরে কোনো ভয় নেই, আর তারা নিজেরা অনুতাপও করবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 275,
            'page_no'       => 47,
            'jaz_no'        => 3,
            'arabic'        => 'الَّذِينَ يَأْكُلُونَ الرِّبَا لَا يَقُومُونَ إِلَّا كَمَا يَقُومُ الَّذِي يَتَخَبَّطُهُ الشَّيْطَانُ مِنَ الْمَسِّ ۚ ذَٰلِكَ بِأَنَّهُمْ قَالُوا إِنَّمَا الْبَيْعُ مِثْلُ الرِّبَا ۗ وَأَحَلَّ اللَّهُ الْبَيْعَ وَحَرَّمَ الرِّبَا ۚ فَمَن جَاءَهُ مَوْعِظَةٌ مِّن رَّبِّهِ فَانتَهَىٰ فَلَهُ مَا سَلَفَ وَأَمْرُهُ إِلَى اللَّهِ ۖ وَمَنْ عَادَ فَأُولَـٰئِكَ أَصْحَابُ النَّارِ ۖ هُمْ فِيهَا خَالِدُونَ',
            'english'       => 'Those who consume interest cannot stand [on the Day of Resurrection] except as one stands who is being beaten by Satan into insanity. That is because they say, "Trade is [just] like interest." But Allah has permitted trade and has forbidden interest. So whoever has received an admonition from his Lord and desists may have what is past, and his affair rests with Allah. But whoever returns to [dealing in interest or usury] - those are the companions of the Fire; they will abide eternally therein.',
            'bangla'        => 'যারা সুদ খায় তারা দাঁড়াতে পারে না তার মতো দাঁড়ানো ছাড়া যাকে শয়তান তার স্পর্শের দ্বারা পাতিত করেছে। এমন হবে কেননা তারা বলে -- \'\'ব্যবসা-বাণিজ্য তো সুদী-কারবারের মতোই।’’ কিন্তু আল্লাহ্ বৈধ করেছেন ব্যবসা-বাণিজ্য, অথচ নিষিদ্ধ করেছেন সুদখুরি। অতএব যার কাছে তারা প্রভুর তরফ থেকে এই নির্দেশ এসেছে এবং সে বিরত হয়েছে তার জন্যে যা গত হয়ে গেছে, আর তার ব্যাপার রইল আল্লাহ্‌র কাছে। আর যে ফিরে যায় তারাই হচ্ছে আগুনের বাসিন্দা, এতে তারা থাকবে দীর্ঘকাল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 276,
            'page_no'       => 47,
            'jaz_no'        => 3,
            'arabic'        => 'يَمْحَقُ اللَّهُ الرِّبَا وَيُرْبِي الصَّدَقَاتِ ۗ وَاللَّهُ لَا يُحِبُّ كُلَّ كَفَّارٍ أَثِيمٍ',
            'english'       => 'Allah destroys interest and gives increase for charities. And Allah does not like every sinning disbeliever.',
            'bangla'        => 'আল্লাহ্ সুদখুরিকে নিষ্ফল করেছেন, এবং দান-খয়রাতকে অগ্রগামী করেছেন। আর আল্লাহ্ সকল অবিশ্বাসী পাপীকে ভালোবাসেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 277,
            'page_no'       => 47,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ الَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ وَأَقَامُوا الصَّلَاةَ وَآتَوُا الزَّكَاةَ لَهُمْ أَجْرُهُمْ عِندَ رَبِّهِمْ وَلَا خَوْفٌ عَلَيْهِمْ وَلَا هُمْ يَحْزَنُونَ',
            'english'       => 'Indeed, those who believe and do righteous deeds and establish prayer and give zakah will have their reward with their Lord, and there will be no fear concerning them, nor will they grieve.',
            'bangla'        => 'নিঃসন্দেহ যারা ঈমান এনেছে এবং সৎকাজ করে, আর নামায কায়েম করে ও যাকাত দেয়, তাদের জন্যে নিজ নিজ পুরস্কার রয়েছে তাদের প্রভুর দরবারে, আর তাদের উপরে কোনো ভয় নেই, এবং তারা নিজেরা অনুতাপও করবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 278,
            'page_no'       => 47,
            'jaz_no'        => 3,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا اتَّقُوا اللَّهَ وَذَرُوا مَا بَقِيَ مِنَ الرِّبَا إِن كُنتُم مُّؤْمِنِينَ',
            'english'       => 'O you who have believed, fear Allah and give up what remains [due to you] of interest, if you should be believers.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! আল্লাহ্‌কে ভয়-শ্রদ্ধা করো, আর সুদের বাবদ বকেয়া যা আছে তা ছেড়ে দাও, যদি তোমরা ঈমানদার হও।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 279,
            'page_no'       => 47,
            'jaz_no'        => 3,
            'arabic'        => 'فَإِن لَّمْ تَفْعَلُوا فَأْذَنُوا بِحَرْبٍ مِّنَ اللَّهِ وَرَسُولِهِ ۖ وَإِن تُبْتُمْ فَلَكُمْ رُءُوسُ أَمْوَالِكُمْ لَا تَظْلِمُونَ وَلَا تُظْلَمُونَ',
            'english'       => 'And if you do not, then be informed of a war [against you] from Allah and His Messenger. But if you repent, you may have your principal - [thus] you do no wrong, nor are you wronged.',
            'bangla'        => 'কিন্তু যদি তোমরা না করো তবে আল্লাহ্ ও তাঁর রসূলের তরফ থেকে সংগ্রামের ঘোষণা জেনে রেখো। আর যদি তোমরা ফেরো তবে তোমাদের জন্য রইল তোমাদের ধনসম্পত্তির আসলভাগ। অত্যাচার করো না এবং অত্যাচারিতও হয়ো না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 280,
            'page_no'       => 47,
            'jaz_no'        => 3,
            'arabic'        => 'وَإِن كَانَ ذُو عُسْرَةٍ فَنَظِرَةٌ إِلَىٰ مَيْسَرَةٍ ۚ وَأَن تَصَدَّقُوا خَيْرٌ لَّكُمْ ۖ إِن كُنتُمْ تَعْلَمُونَ',
            'english'       => 'And if someone is in hardship, then [let there be] postponement until [a time of] ease. But if you give [from your right as] charity, then it is better for you, if you only knew.',
            'bangla'        => 'আর যদি সে অসচ্ছল অবস্থায় থাকে তবে মূলতবি রাখো যতক্ষণ না সচ্ছলতা আসে। আর যদি দান করে দাও তবে তা তোমাদের জন্য আরো উত্তম, -- যদি তোমরা জানতে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 281,
            'page_no'       => 47,
            'jaz_no'        => 3,
            'arabic'        => 'وَاتَّقُوا يَوْمًا تُرْجَعُونَ فِيهِ إِلَى اللَّهِ ۖ ثُمَّ تُوَفَّىٰ كُلُّ نَفْسٍ مَّا كَسَبَتْ وَهُمْ لَا يُظْلَمُونَ',
            'english'       => 'And fear a Day when you will be returned to Allah. Then every soul will be compensated for what it earned, and they will not be treated unjustly.',
            'bangla'        => 'আর হুশিয়াঁর হও সেই দিন সন্বন্ধে যেদিন তোমাদের ফিরিয়ে আনা হবে আল্লাহ্‌র তরফে, তখন প্রত্যেক লোককে পুরোপুরি প্রতিদান দেয়া হবে যা সে অর্জন করেছে, আর তাদের অন্যায় করা হবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 282,
            'page_no'       => 48,
            'jaz_no'        => 3,
            'arabic'        => 'يَا أَيُّهَا الَّذِينَ آمَنُوا إِذَا تَدَايَنتُم بِدَيْنٍ إِلَىٰ أَجَلٍ مُّسَمًّى فَاكْتُبُوهُ ۚ وَلْيَكْتُب بَّيْنَكُمْ كَاتِبٌ بِالْعَدْلِ ۚ وَلَا يَأْبَ كَاتِبٌ أَن يَكْتُبَ كَمَا عَلَّمَهُ اللَّهُ ۚ فَلْيَكْتُبْ وَلْيُمْلِلِ الَّذِي عَلَيْهِ الْحَقُّ وَلْيَتَّقِ اللَّهَ رَبَّهُ وَلَا يَبْخَسْ مِنْهُ شَيْئًا ۚ فَإِن كَانَ الَّذِي عَلَيْهِ الْحَقُّ سَفِيهًا أَوْ ضَعِيفًا أَوْ لَا يَسْتَطِيعُ أَن يُمِلَّ هُوَ فَلْيُمْلِلْ وَلِيُّهُ بِالْعَدْلِ ۚ وَاسْتَشْهِدُوا شَهِيدَيْنِ مِن رِّجَالِكُمْ ۖ فَإِن لَّمْ يَكُونَا رَجُلَيْنِ فَرَجُلٌ وَامْرَأَتَانِ مِمَّن تَرْضَوْنَ مِنَ الشُّهَدَاءِ أَن تَضِلَّ إِحْدَاهُمَا فَتُذَكِّرَ إِحْدَاهُمَا الْأُخْرَىٰ ۚ وَلَا يَأْبَ الشُّهَدَاءُ إِذَا مَا دُعُوا ۚ وَلَا تَسْأَمُوا أَن تَكْتُبُوهُ صَغِيرًا أَوْ كَبِيرًا إِلَىٰ أَجَلِهِ ۚ ذَٰلِكُمْ أَقْسَطُ عِندَ اللَّهِ وَأَقْوَمُ لِلشَّهَادَةِ وَأَدْنَىٰ أَلَّا تَرْتَابُوا ۖ إِلَّا أَن تَكُونَ تِجَارَةً حَاضِرَةً تُدِيرُونَهَا بَيْنَكُمْ فَلَيْسَ عَلَيْكُمْ جُنَاحٌ أَلَّا تَكْتُبُوهَا ۗ وَأَشْهِدُوا إِذَا تَبَايَعْتُمْ ۚ وَلَا يُضَارَّ كَاتِبٌ وَلَا شَهِيدٌ ۚ وَإِن تَفْعَلُوا فَإِنَّهُ فُسُوقٌ بِكُمْ ۗ وَاتَّقُوا اللَّهَ ۖ وَيُعَلِّمُكُمُ اللَّهُ ۗ وَاللَّهُ بِكُلِّ شَيْءٍ عَلِيمٌ',
            'english'       => 'O you who have believed, when you contract a debt for a specified term, write it down. And let a scribe write [it] between you in justice. Let no scribe refuse to write as Allah has taught him. So let him write and let the one who has the obligation dictate. And let him fear Allah, his Lord, and not leave anything out of it. But if the one who has the obligation is of limited understanding or weak or unable to dictate himself, then let his guardian dictate in justice. And bring to witness two witnesses from among your men. And if there are not two men [available], then a man and two women from those whom you accept as witnesses - so that if one of the women errs, then the other can remind her. And let not the witnesses refuse when they are called upon. And do not be [too] weary to write it, whether it is small or large, for its [specified] term. That is more just in the sight of Allah and stronger as evidence and more likely to prevent doubt between you, except when it is an immediate transaction which you conduct among yourselves. For [then] there is no blame upon you if you do not write it. And take witnesses when you conclude a contract. Let no scribe be harmed or any witness. For if you do so, indeed, it is [grave] disobedience in you. And fear Allah. And Allah teaches you. And Allah is Knowing of all things.',
            'bangla'        => 'ওহে যারা ঈমান এনেছ! তোমরা যখন কোনো লেনদেন নির্দিষ্ট সময়ের জন্য পরস্পরের মধ্যে সম্পাদিত কর তখন তা লিখে রাখো, এবং লেখকজন যেন তোমাদের মধ্যে লিখে রাখুক ন্যাসঙ্গতভাবে, আর লেখক যেন লিখতে অস্বীকার না করে, কেননা আল্লাহ্ তাকে শিখিয়েছেন, কাজেই সে লিখুক। আর যার উপরে দেনার দায় সে বলে যাবে, আর সে তার প্রভু আল্লাহ্‌কে যেন ভয়-ভক্তি করে, এবং তা’ থেকে কোনো কিছু যেন কম না করে। কিন্তু যার উপরে দেনার দায় সে যদি অল্পবুদ্ধি বা জরাগ্রস্ত হয়, অথবা তা বলে যেতে অপারগ হয় তবে তার অভিভাবক বলে যাক ন্যায়সঙ্গতভাবে। আর তোমাদের পুরুষদের মধ্যে থেকে দুইজন সাক্ষীকে সাক্ষী মনোনীত করো। কিন্তু যদি দুইজন পুরুষকে পাওয়া না যায় তবে একজন পুরুষ ও দু’জন মহিলাকে -- তাদের মধ্যে থেকে যাদের তোমরা সাক্ষী মনোনীত কর, যাতে তাদের দুজনের একজন যদি ভুল করে তবে তাদের অন্য একজন মনে করিয়ে দেবে। আর সাক্ষীরা যেন অস্বীকার না করে যখন তাদের ডাকা হয়। আর এটা লিখে নিতে অমনোযোগী হয়ো না -- ছোট হোক বা বড় হোক -- তার মেয়াদ সমেত। এ আল্লাহ্‌র কাছে বেশী ন্যায়সঙ্গত ও সাক্ষ্যের জন্য বেশী নির্ভরযোগ্য, এবং তোমরা যাতে সন্দেহ না করো সেজন্যেও এ সব চাইতে ভালো, তবে হাতের কাছের পণ্যসামগ্রী হলে তোমাদের মধ্যে তার বিনিময়ের ক্ষেত্র ব্যতীত, তখন তোমাদের অপরাধ হবে না যদি তোমরা তা লেখাপড়া না করো। আর সাক্ষী রাখো যখন তোমরা একে অন্যের কাছে বিক্রি করো। আর লেখকজন যেন ক্ষতিগ্রস্ত না হয়, আর সাক্ষীও যেন না হয়। কিন্তু যদি তোমরা কর তবে তা নিশ্চয়ই তোমাদের পক্ষে দুস্কার্য হবে। আর আল্লাহ্‌কে ভয়-ভক্তি করো, কারণ আল্লাহ্ তোমাদের শিখিয়েছেন। আর আল্লাহ্ সব-কিছু সন্বন্দে সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 283,
            'page_no'       => 49,
            'jaz_no'        => 3,
            'arabic'        => 'وَإِن كُنتُمْ عَلَىٰ سَفَرٍ وَلَمْ تَجِدُوا كَاتِبًا فَرِهَانٌ مَّقْبُوضَةٌ ۖ فَإِنْ أَمِنَ بَعْضُكُم بَعْضًا فَلْيُؤَدِّ الَّذِي اؤْتُمِنَ أَمَانَتَهُ وَلْيَتَّقِ اللَّهَ رَبَّهُ ۗ وَلَا تَكْتُمُوا الشَّهَادَةَ ۚ وَمَن يَكْتُمْهَا فَإِنَّهُ آثِمٌ قَلْبُهُ ۗ وَاللَّهُ بِمَا تَعْمَلُونَ عَلِيمٌ',
            'english'       => 'And if you are on a journey and cannot find a scribe, then a security deposit [should be] taken. And if one of you entrusts another, then let him who is entrusted discharge his trust [faithfully] and let him fear Allah, his Lord. And do not conceal testimony, for whoever conceals it - his heart is indeed sinful, and Allah is Knowing of what you do.',
            'bangla'        => 'আর যদি তোমরা সফরে থাক এবং লেখক না পাও তবে বন্ধক নিতে পার। কিন্তু তোমাদের কেউ যদি অন্যের কাছে বিশ্বাসস্থাপন করে তবে যাকে বিশ্বাস করা হল সে তার আমানত ফেরত দিক, আর তার প্রভু আল্লাহ্‌কে ভয়-ভক্তি করুক। আর সাক্ষ্য গোপন করবে না, কারণ যে তা গোপন করে তার হৃদয় নিঃসন্দেহ পাপপূর্ণ। আর তোমরা যা করো আল্লাহ্ সে-সন্বন্ধে স র্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 284,
            'page_no'       => 49,
            'jaz_no'        => 3,
            'arabic'        => 'لِّلَّهِ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ ۗ وَإِن تُبْدُوا مَا فِي أَنفُسِكُمْ أَوْ تُخْفُوهُ يُحَاسِبْكُم بِهِ اللَّهُ ۖ فَيَغْفِرُ لِمَن يَشَاءُ وَيُعَذِّبُ مَن يَشَاءُ ۗ وَاللَّهُ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
            'english'       => 'To Allah belongs whatever is in the heavens and whatever is in the earth. Whether you show what is within yourselves or conceal it, Allah will bring you to account for it. Then He will forgive whom He wills and punish whom He wills, and Allah is over all things competent.',
            'bangla'        => 'আল্লাহ্‌রই যা-কিছু আছে মহাকাশমন্ডলে ও যা-কিছু আছে পৃথিবীতে। আর তোমাদের অন্তরে যা আছে তা প্রকাশ করো, বা তা লুকিয়ে রাখো, আল্লাহ্ তার জন্য তোমাদের হিসেব-নিকেশ নেবেন। কাজেই যাকে তিনি ইচ্ছা করবেন পরিত্রাণ করবেন এবং যাকে ইচ্ছা করবেন শাস্তিও দেবেন। আর আল্লাহ্ সব-কিছুর উপরে সর্বশক্তিমান।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 285,
            'page_no'       => 49,
            'jaz_no'        => 3,
            'arabic'        => 'آمَنَ الرَّسُولُ بِمَا أُنزِلَ إِلَيْهِ مِن رَّبِّهِ وَالْمُؤْمِنُونَ ۚ كُلٌّ آمَنَ بِاللَّهِ وَمَلَائِكَتِهِ وَكُتُبِهِ وَرُسُلِهِ لَا نُفَرِّقُ بَيْنَ أَحَدٍ مِّن رُّسُلِهِ ۚ وَقَالُوا سَمِعْنَا وَأَطَعْنَا ۖ غُفْرَانَكَ رَبَّنَا وَإِلَيْكَ الْمَصِيرُ',
            'english'       => 'The Messenger has believed in what was revealed to him from his Lord, and [so have] the believers. All of them have believed in Allah and His angels and His books and His messengers, [saying], "We make no distinction between any of His messengers." And they say, "We hear and we obey. [We seek] Your forgiveness, our Lord, and to You is the [final] destination."',
            'bangla'        => 'রসূল ঈমান এনেছেন যা তাঁর প্রভুর কাছ থেকে তাঁর কাছে অবতীর্ণ হয়েছে, আর বিশ্বাসীরাও। তারা সবাই ঈমান এনেছে আল্লাহ্‌তে, আর তাঁর ফিরিশ্‌তাগণে, আর তাঁর কিতাবসমূহে, আর তাঁর রসূলগণে, -- \'\'আমরা তাঁর রসূলদের কোনোজনের মধ্যে কোনো পার্থক্য করি না।’’ তারা আরও বলে -- \'\'আমরা শুনি আর আমরা পালন করি, হে আমাদের প্রভু! তোমার পরিত্রাণ, আর তোমারই কাছে গন্তব্যপথ।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 2,
            'ayah_no'       => 286,
            'page_no'       => 49,
            'jaz_no'        => 3,
            'arabic'        => 'لَا يُكَلِّفُ اللَّهُ نَفْسًا إِلَّا وُسْعَهَا ۚ لَهَا مَا كَسَبَتْ وَعَلَيْهَا مَا اكْتَسَبَتْ ۗ رَبَّنَا لَا تُؤَاخِذْنَا إِن نَّسِينَا أَوْ أَخْطَأْنَا ۚ رَبَّنَا وَلَا تَحْمِلْ عَلَيْنَا إِصْرًا كَمَا حَمَلْتَهُ عَلَى الَّذِينَ مِن قَبْلِنَا ۚ رَبَّنَا وَلَا تُحَمِّلْنَا مَا لَا طَاقَةَ لَنَا بِهِ ۖ وَاعْفُ عَنَّا وَاغْفِرْ لَنَا وَارْحَمْنَا ۚ أَنتَ مَوْلَانَا فَانصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ',
            'english'       => 'Allah does not charge a soul except [with that within] its capacity. It will have [the consequence of] what [good] it has gained, and it will bear [the consequence of] what [evil] it has earned. "Our Lord, do not impose blame upon us if we have forgotten or erred. Our Lord, and lay not upon us a burden like that which You laid upon those before us. Our Lord, and burden us not with that which we have no ability to bear. And pardon us; and forgive us; and have mercy upon us. You are our protector, so give us victory over the disbelieving people."',
            'bangla'        => 'আল্লাহ্ কোনো সত্তার উপরে তার ক্ষমতার অতিরিক্ত দায়িত্ব চাপিয়ে দেন না। তার অনুকূলে রয়েছে সে যা-কিছু অর্জন করেছে, আর তার প্রতিকূলে রয়েছে যা-কিছু সে কামিয়েছে। \'\'আমাদের প্রভু, আমাদের পাকড়াও করো না যদি আমরা ভুলে যাই অথবা ভুল করি, হে আমাদের প্রভু! আর আমাদের উপরে তেমন বোঝা চাপিও না যেমন তুমি তা চাপিয়েছিলে তাদের উপরে যারা ছিল আমাদের পূর্ববর্তী, আমাদের প্রভু! আর আমাদের উপরে তেমন ভার তুলে দিয়ো না যার সামর্থ্য আমাদের নেই। অতএব তুমি আমাদের ক্ষমা করে দাও, আর আমাদের তুমি রক্ষা করে রাখো, আর আমাদের প্রতি তুমি করুণা বর্ষণ করো। তুমিই আমাদের পৃষ্ঠপোষক, অতএব অবিশ্বাসিগোষ্ঠীর বিরুদ্ধে আমাদের তুমি সাহায্য করো।’’'
        ]);

        // Sura Al Imraan
        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 1,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'الم',
            'english'       => 'Alif, Lam, Meem.',
            'bangla'        => 'আলিফ, লাম, মীম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 2,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'اللَّهُ لَا إِلَـٰهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ',
            'english'       => 'Allah - there is no deity except Him, the Ever-Living, the Sustainer of existence.',
            'bangla'        => 'আল্লাহ্‌! তিনি ছাড়া অন্য উপাস্য নেই, -- চিরজীবন্ত, সদা-বিদ্যমান।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 3,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'نَزَّلَ عَلَيْكَ الْكِتَابَ بِالْحَقِّ مُصَدِّقًا لِّمَا بَيْنَ يَدَيْهِ وَأَنزَلَ التَّوْرَاةَ وَالْإِنجِيلَ',
            'english'       => 'He has sent down upon you, [O Muhammad], the Book in truth, confirming what was before it. And He revealed the Torah and the Gospel.',
            'bangla'        => 'তিনি তোমার কাছে এই কিতাব অবতারণ করেছেন সত্যের সাথে, -- এর আগে যা এসেছিল তার সত্যসমর্থনরূপে আর তিনি তওরাত ও ইনজীল অবতারণ করেছিলেন --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 4,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'مِن قَبْلُ هُدًى لِّلنَّاسِ وَأَنزَلَ الْفُرْقَانَ ۗ إِنَّ الَّذِينَ كَفَرُوا بِآيَاتِ اللَّهِ لَهُمْ عَذَابٌ شَدِيدٌ ۗ وَاللَّهُ عَزِيزٌ ذُو انتِقَامٍ',
            'english'       => 'Before, as guidance for the people. And He revealed the Qur\'an. Indeed, those who disbelieve in the verses of Allah will have a severe punishment, and Allah is exalted in Might, the Owner of Retribution.',
            'bangla'        => '-- এর আগে, মানুষের জন্য এক একটি পথনির্দেশ হিসেবে, আর তিনি অবতারণ করেছেন এই ফুরকান। নিঃসন্দেহ যারা অবিশ্বাস করে আল্লাহ্‌র বাণীসমূহে, তাদের জন্য রয়েছে ভয়ঙ্কর শাস্তি। আর আল্লাহ্ মহাশক্তিশালী, প্রতিফল দান সুসমর্থ।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 5,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ اللَّهَ لَا يَخْفَىٰ عَلَيْهِ شَيْءٌ فِي الْأَرْضِ وَلَا فِي السَّمَاءِ',
            'english'       => 'Indeed, from Allah nothing is hidden in the earth nor in the heaven.',
            'bangla'        => 'নিঃসন্দেহ আল্লাহ্ সম্পর্কে, -- তাঁর কাছে কিছুই লুকানো নেই পৃথিবীতে, আর মহাকাশেও নেই।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 6,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'هُوَ الَّذِي يُصَوِّرُكُمْ فِي الْأَرْحَامِ كَيْفَ يَشَاءُ ۚ لَا إِلَـٰهَ إِلَّا هُوَ الْعَزِيزُ الْحَكِيمُ',
            'english'       => 'It is He who forms you in the wombs however He wills. There is no deity except Him, the Exalted in Might, the Wise.',
            'bangla'        => 'তিনিই সেইজন যিনি তোমাদের গড়ে তোলেন জঠরের ভেতরে যেমন তিনি চান। তিনি ছাড়া কোনো উপাস্য নেই, -- মহাশক্তিশালী, পরমজ্ঞানী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 7,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'هُوَ الَّذِي أَنزَلَ عَلَيْكَ الْكِتَابَ مِنْهُ آيَاتٌ مُّحْكَمَاتٌ هُنَّ أُمُّ الْكِتَابِ وَأُخَرُ مُتَشَابِهَاتٌ ۖ فَأَمَّا الَّذِينَ فِي قُلُوبِهِمْ زَيْغٌ فَيَتَّبِعُونَ مَا تَشَابَهَ مِنْهُ ابْتِغَاءَ الْفِتْنَةِ وَابْتِغَاءَ تَأْوِيلِهِ ۗ وَمَا يَعْلَمُ تَأْوِيلَهُ إِلَّا اللَّهُ ۗ وَالرَّاسِخُونَ فِي الْعِلْمِ يَقُولُونَ آمَنَّا بِهِ كُلٌّ مِّنْ عِندِ رَبِّنَا ۗ وَمَا يَذَّكَّرُ إِلَّا أُولُو الْأَلْبَابِ',
            'english'       => 'It is He who has sent down to you, [O Muhammad], the Book; in it are verses [that are] precise - they are the foundation of the Book - and others unspecific. As for those in whose hearts is deviation [from truth], they will follow that of it which is unspecific, seeking discord and seeking an interpretation [suitable to them]. And no one knows its [true] interpretation except Allah. But those firm in knowledge say, "We believe in it. All [of it] is from our Lord." And no one will be reminded except those of understanding.',
            'bangla'        => 'তিনি সেইজন যিনি তোমার কাছে নাযিল করেছেন এই কিতাব, তার মধ্যে কতকগুলো আয়াত নির্দেশা‌ত্মক -- সেইসব হচ্ছে গ্রন্থের ভিত্তি, আর অপরগুলো রূপক। তবে তাদের বেলা যাদের অন্তরে আছে কুটিলতা তারা অনুসরণ করে এর মধ্যের যেগুলো রূপক, বিরোধ সৃষ্টির কামনায় এবং এর ব্যাখ্যা দেবার প্রচেষ্টায়। আর এর ব্যাখ্যা আর কেউ জানে না আল্লাহ্ ছাড়া। আর যারা জ্ঞানে দৃঢ়প্রতিষ্ঠিত তারা বলে -- \'\'আমরা এতে বিশ্বাস করি, এ-সবই আমাদের প্রভুর কাছ থেকে।’’ আর কেউ মনোযোগ দেয় না কেবল জ্ঞানবান ছাড়া।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 8,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'رَبَّنَا لَا تُزِغْ قُلُوبَنَا بَعْدَ إِذْ هَدَيْتَنَا وَهَبْ لَنَا مِن لَّدُنكَ رَحْمَةً ۚ إِنَّكَ أَنتَ الْوَهَّابُ',
            'english'       => '[Who say], "Our Lord, let not our hearts deviate after You have guided us and grant us from Yourself mercy. Indeed, You are the Bestower.',
            'bangla'        => '\'\'আমাদের প্রভু! আমাদের অন্তরকে বিপথগামী করো না আমাদের হেদায়ত করার পরে, আর তোমার নিকট থেকে আমাদের করুণা প্রদান করো। নিঃসন্দেহ তুমি নিজেই পরম বদান্য।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 9,
            'page_no'       => 50,
            'jaz_no'        => 3,
            'arabic'        => 'رَبَّنَا إِنَّكَ جَامِعُ النَّاسِ لِيَوْمٍ لَّا رَيْبَ فِيهِ ۚ إِنَّ اللَّهَ لَا يُخْلِفُ الْمِيعَادَ',
            'english'       => 'Our Lord, surely You will gather the people for a Day about which there is no doubt. Indeed, Allah does not fail in His promise."',
            'bangla'        => '\'\'আমাদের প্রভু! অবশ্যই তুমি লোকজনকে সমবেত করতে যাচ্ছো এমন এক দিনের প্রতি যার সন্বন্ধে কোনোও সন্দেহ নেই।’’ নিঃসন্দেহ আল্লাহ্ ধার্য স্থান-কালের কখনো খেলাফ করেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 10,
            'page_no'       => 51,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ الَّذِينَ كَفَرُوا لَن تُغْنِيَ عَنْهُمْ أَمْوَالُهُمْ وَلَا أَوْلَادُهُم مِّنَ اللَّهِ شَيْئًا ۖ وَأُولَـٰئِكَ هُمْ وَقُودُ النَّارِ',
            'english'       => 'Indeed, those who disbelieve - never will their wealth or their children avail them against Allah at all. And it is they who are fuel for the Fire.',
            'bangla'        => 'যারা অবিশ্বাস পোষণ করে, নিঃসন্দেহ আর তারা নিজেরাই হচ্ছে আগুনের ইন্ধন --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 11,
            'page_no'       => 51,
            'jaz_no'        => 3,
            'arabic'        => 'كَدَأْبِ آلِ فِرْعَوْنَ وَالَّذِينَ مِن قَبْلِهِمْ ۚ كَذَّبُوا بِآيَاتِنَا فَأَخَذَهُمُ اللَّهُ بِذُنُوبِهِمْ ۗ وَاللَّهُ شَدِيدُ الْعِقَابِ',
            'english'       => '[Theirs is] like the custom of the people of Pharaoh and those before them. They denied Our signs, so Allah seized them for their sins. And Allah is severe in penalty.',
            'bangla'        => 'ফিরআউনের দলের সংগ্রামের মতো, এবং যারা তাদের পূর্ববর্তীদের অন্তর্ভুক্ত ছিল। তারা আমাদের প্রত্যাদেশসমূহে মিথ্যারোপ করেছিল, তাই আল্লাহ্ তাদের পাকড়াও করেছিলেন তাদের অপরাধের জন্য। আর আল্লাহ্ প্রতিফল দানে কঠোর।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 12,
            'page_no'       => 51,
            'jaz_no'        => 3,
            'arabic'        => 'قُل لِّلَّذِينَ كَفَرُوا سَتُغْلَبُونَ وَتُحْشَرُونَ إِلَىٰ جَهَنَّمَ ۚ وَبِئْسَ الْمِهَادُ',
            'english'       => 'Say to those who disbelieve, "You will be overcome and gathered together to Hell, and wretched is the resting place."',
            'bangla'        => 'যারা অবিশ্বাস পোষণ করে তাদের বলো -- \'\'তোমরা শীঘ্রই পরাভূত হবে, আর তোমাদের তাড়িয়ে নেয়া হবে জাহান্নামের দিকে, আর মন্দ সেই বিশ্রামস্থান।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 13,
            'page_no'       => 51,
            'jaz_no'        => 3,
            'arabic'        => 'قَدْ كَانَ لَكُمْ آيَةٌ فِي فِئَتَيْنِ الْتَقَتَا ۖ فِئَةٌ تُقَاتِلُ فِي سَبِيلِ اللَّهِ وَأُخْرَىٰ كَافِرَةٌ يَرَوْنَهُم مِّثْلَيْهِمْ رَأْيَ الْعَيْنِ ۚ وَاللَّهُ يُؤَيِّدُ بِنَصْرِهِ مَن يَشَاءُ ۗ إِنَّ فِي ذَٰلِكَ لَعِبْرَةً لِّأُولِي الْأَبْصَارِ',
            'english'       => 'Already there has been for you a sign in the two armies which met - one fighting in the cause of Allah and another of disbelievers. They saw them [to be] twice their [own] number by [their] eyesight. But Allah supports with His victory whom He wills. Indeed in that is a lesson for those of vision.',
            'bangla'        => 'ইতিপূর্বে তোমাদের জন্য একটি নিদর্শন এসেছিল দুই সৈন্যদলের মুখোমুখি হওয়ায় -- একদল যুদ্ধ করছিল আল্লাহ্‌র পথে, আর অন্য দল অবিশ্বাসী, এরা চোখের দেখায় তাদের দেখেছিল নিজেদের দ্বিগুণ। আর আল্লাহ্ তাঁর সাহায্য দিয়ে মদদ করেন যাকে তিনি ইচ্ছে করেন। নিঃসন্দেহ এতে শিক্ষণীয় বিষয় আছে দৃষ্টিবানদের জন্য।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 14,
            'page_no'       => 51,
            'jaz_no'        => 3,
            'arabic'        => 'زُيِّنَ لِلنَّاسِ حُبُّ الشَّهَوَاتِ مِنَ النِّسَاءِ وَالْبَنِينَ وَالْقَنَاطِيرِ الْمُقَنطَرَةِ مِنَ الذَّهَبِ وَالْفِضَّةِ وَالْخَيْلِ الْمُسَوَّمَةِ وَالْأَنْعَامِ وَالْحَرْثِ ۗ ذَٰلِكَ مَتَاعُ الْحَيَاةِ الدُّنْيَا ۖ وَاللَّهُ عِندَهُ حُسْنُ الْمَآبِ',
            'english'       => 'Beautified for people is the love of that which they desire - of women and sons, heaped-up sums of gold and silver, fine branded horses, and cattle and tilled land. That is the enjoyment of worldly life, but Allah has with Him the best return.',
            'bangla'        => 'মানুষের পক্ষে মনোরম ঠেকে নারীদের সাহচর্যের প্রতি আকর্ষণ, ও সন্তানসন্ততির, ও সোনারূপার জমানো ভান্ডারের, ও সুশিক্ষিত ঘোড়া ও গবাদি-পশুর ও ক্ষেতখামারের। এসব এই দুনিয়ার জীবনের উপকরণ, অথচ আল্লাহ্‌, -- তাঁর কাছে রয়েছে উত্তম নিভৃতে বিশ্রাম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 15,
            'page_no'       => 51,
            'jaz_no'        => 3,
            'arabic'        => 'قُلْ أَؤُنَبِّئُكُم بِخَيْرٍ مِّن ذَٰلِكُمْ ۚ لِلَّذِينَ اتَّقَوْا عِندَ رَبِّهِمْ جَنَّاتٌ تَجْرِي مِن تَحْتِهَا الْأَنْهَارُ خَالِدِينَ فِيهَا وَأَزْوَاجٌ مُّطَهَّرَةٌ وَرِضْوَانٌ مِّنَ اللَّهِ ۗ وَاللَّهُ بَصِيرٌ بِالْعِبَادِ',
            'english'       => 'Say, "Shall I inform you of [something] better than that? For those who fear Allah will be gardens in the presence of their Lord beneath which rivers flow, wherein they abide eternally, and purified spouses and approval from Allah. And Allah is Seeing of [His] servants -',
            'bangla'        => 'বলো -- \'\'তোমাদের কি এ-সবের চাইতে ভালো জিনিসের খবর দেব? যারা সুপথে চলে তাদের জন্য তাদের প্রভুর কাছে রয়েছ বাগানসমূহ, যাদের নীচে দিয়ে বয়ে যাচ্ছে ঝরনারাজি, সেখানে তারা থাকবে চিরকাল, আর পবিত্র সঙ্গিসাথী, আর আল্লাহ্‌র সন্তষ্টি। আর আল্লাহ্ বান্দাদের পর্যবেক্ষক --'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 16,
            'page_no'       => 52,
            'jaz_no'        => 3,
            'arabic'        => 'الَّذِينَ يَقُولُونَ رَبَّنَا إِنَّنَا آمَنَّا فَاغْفِرْ لَنَا ذُنُوبَنَا وَقِنَا عَذَابَ النَّارِ',
            'english'       => 'Those who say, "Our Lord, indeed we have believed, so forgive us our sins and protect us from the punishment of the Fire,"',
            'bangla'        => '\'\'যারা বলে -- \'আমাদের প্রভু! আমরা নিশ্চয়ই ঈমান এনেছি, অতএব আমাদের অপরাধ থেকে তুমি আমাদের ত্রাণ করো, আর আগুনের যাতনা থেকে আমাদের রক্ষা করো’।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 17,
            'page_no'       => 52,
            'jaz_no'        => 3,
            'arabic'        => 'الصَّابِرِينَ وَالصَّادِقِينَ وَالْقَانِتِينَ وَالْمُنفِقِينَ وَالْمُسْتَغْفِرِينَ بِالْأَسْحَارِ',
            'english'       => 'The patient, the true, the obedient, those who spend [in the way of Allah], and those who seek forgiveness before dawn.',
            'bangla'        => '\'\'ধৈর্যশীল, আর সত্যপরায়ণ আর অনুগত, আর দানশীল, আর প্রাতে পরিত্রাণ প্রার্থী।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 18,
            'page_no'       => 52,
            'jaz_no'        => 3,
            'arabic'        => 'شَهِدَ اللَّهُ أَنَّهُ لَا إِلَـٰهَ إِلَّا هُوَ وَالْمَلَائِكَةُ وَأُولُو الْعِلْمِ قَائِمًا بِالْقِسْطِ ۚ لَا إِلَـٰهَ إِلَّا هُوَ الْعَزِيزُ الْحَكِيمُ',
            'english'       => 'Allah witnesses that there is no deity except Him, and [so do] the angels and those of knowledge - [that He is] maintaining [creation] in justice. There is no deity except Him, the Exalted in Might, the Wise.',
            'bangla'        => 'আল্লাহ্ সাক্ষ্য দিচ্ছেন যে তিনি ছাড়া আর কোনো উপাস্য নেই, আর ফিরিশ্‌তারাও, আর জ্ঞানের অধিকারীরা ন্যায়ে অধিষ্ঠিত হয়ে। তিনি ছাড়া কোনো উপাস্য নেই, মহাশক্তিশালী, পরমজ্ঞানী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 19,
            'page_no'       => 52,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ الدِّينَ عِندَ اللَّهِ الْإِسْلَامُ ۗ وَمَا اخْتَلَفَ الَّذِينَ أُوتُوا الْكِتَابَ إِلَّا مِن بَعْدِ مَا جَاءَهُمُ الْعِلْمُ بَغْيًا بَيْنَهُمْ ۗ وَمَن يَكْفُرْ بِآيَاتِ اللَّهِ فَإِنَّ اللَّهَ سَرِيعُ الْحِسَابِ',
            'english'       => 'Indeed, the religion in the sight of Allah is Islam. And those who were given the Scripture did not differ except after knowledge had come to them - out of jealous animosity between themselves. And whoever disbelieves in the verses of Allah, then indeed, Allah is swift in [taking] account.',
            'bangla'        => 'নিঃসন্দেহ আল্লাহ্‌র কাছে ধর্ম হচ্ছে ইসলাম। আর যাদের কিতাব দেয়া হয়েছিল তারা মতভেদ করে নি, শুধু তারা ব্যতীত যাদের কাছে জ্ঞানের বিষয় আসার পরেও নিজেদের মধ্যে ঈর্ষাবিদ্বেষ করেছিল, আর যে কেউ আল্লাহ্‌র নির্দেশের প্রতি অবিশ্বাস পোষণ করে -- নিঃসন্দেহ আল্লাহ্ হিসেব-নিকেশে তৎপর।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 20,
            'page_no'       => 52,
            'jaz_no'        => 3,
            'arabic'        => 'فَإِنْ حَاجُّوكَ فَقُلْ أَسْلَمْتُ وَجْهِيَ لِلَّهِ وَمَنِ اتَّبَعَنِ ۗ وَقُل لِّلَّذِينَ أُوتُوا الْكِتَابَ وَالْأُمِّيِّينَ أَأَسْلَمْتُمْ ۚ فَإِنْ أَسْلَمُوا فَقَدِ اهْتَدَوا ۖ وَّإِن تَوَلَّوْا فَإِنَّمَا عَلَيْكَ الْبَلَاغُ ۗ وَاللَّهُ بَصِيرٌ بِالْعِبَادِ',
            'english'       => 'So if they argue with you, say, "I have submitted myself to Allah [in Islam], and [so have] those who follow me." And say to those who were given the Scripture and [to] the unlearned, "Have you submitted yourselves?" And if they submit [in Islam], they are rightly guided; but if they turn away - then upon you is only the [duty of] notification. And Allah is Seeing of [His] servants.',
            'bangla'        => 'কিন্তু যদি তারা তোমার সাথে হুজ্জত করে, তবে বলো -- \'\'আমি সম্পূর্ণরূপে আল্লাহ্‌র দিকে আমার মুখ রুজু করেছি, আর যারা আমায় অনুসরণ করে।’’ আর তাদের বলো যাদের কিতাব দেয়া হয়েছে আর নিরক্ষরদের, \'\'তোমরা কি আ‌ত্মসমর্পণ করেছ?’’ অতএব যদি তারা আ‌ত্মসমর্পণ করে তবে অবশ্যই তারা হেদায়তপ্রাপ্ত হবে, আর যদি তারা ফিরে যায় তবে নিঃসন্দেহ তোমার উপরে হচ্ছে পৌঁছে দেয়া। আর আল্লাহ্ বান্দাদের দর্শক।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 21,
            'page_no'       => 52,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ الَّذِينَ يَكْفُرُونَ بِآيَاتِ اللَّهِ وَيَقْتُلُونَ النَّبِيِّينَ بِغَيْرِ حَقٍّ وَيَقْتُلُونَ الَّذِينَ يَأْمُرُونَ بِالْقِسْطِ مِنَ النَّاسِ فَبَشِّرْهُم بِعَذَابٍ أَلِيمٍ',
            'english'       => 'Those who disbelieve in the signs of Allah and kill the prophets without right and kill those who order justice from among the people - give them tidings of a painful punishment.',
            'bangla'        => 'নিঃসন্দেহ যারা আল্লাহ্‌র নির্দেশাবলীতে অবিশ্বাস পোষণ করে, আর নবীদের অন্যায়ভাবে হত্যা করতে যায়, আর মানুষদের মধ্যে যারা ন্যায় প্রতিষ্ঠার নির্দেশ দেয় তাদের হত্যা করতে যায়, -- তাদের তুমি সংবাদ দাও ব্যথাময় যাতনার।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 22,
            'page_no'       => 52,
            'jaz_no'        => 3,
            'arabic'        => 'أُولَـٰئِكَ الَّذِينَ حَبِطَتْ أَعْمَالُهُمْ فِي الدُّنْيَا وَالْآخِرَةِ وَمَا لَهُم مِّن نَّاصِرِينَ',
            'english'       => 'They are the ones whose deeds have become worthless in this world and the Hereafter, and for them there will be no helpers.',
            'bangla'        => 'এরাই তারা যাদের সব কাজ বৃথা হবে এই দুনিয়াতে ও আখেরাতে, আর তাদের জন্য সাহায্যকারীদের কেউ থাকবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 23,
            'page_no'       => 53,
            'jaz_no'        => 3,
            'arabic'        => 'أَلَمْ تَرَ إِلَى الَّذِينَ أُوتُوا نَصِيبًا مِّنَ الْكِتَابِ يُدْعَوْنَ إِلَىٰ كِتَابِ اللَّهِ لِيَحْكُمَ بَيْنَهُمْ ثُمَّ يَتَوَلَّىٰ فَرِيقٌ مِّنْهُمْ وَهُم مُّعْرِضُونَ',
            'english'       => 'Do you not consider, [O Muhammad], those who were given a portion of the Scripture? They are invited to the Scripture of Allah that it should arbitrate between them; then a party of them turns away, and they are refusing.',
            'bangla'        => 'তুমি কি তাদের দিকে চেয়ে দেখো নি যাদের কিতাবের কিছু অংশ দেয়া হয়েছে? তাদের আহ্বান করা হচ্ছে আল্লাহ্‌র কিতাবের দিকে, যেন ইহা তাদের মধ্যে মীমাংসা করতে পারে। তারপর তাদের মধ্যের একটি দল ফিরে গেল, ফলে তারা হল অগ্রাহ্যকারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 24,
            'page_no'       => 53,
            'jaz_no'        => 3,
            'arabic'        => 'ذَٰلِكَ بِأَنَّهُمْ قَالُوا لَن تَمَسَّنَا النَّارُ إِلَّا أَيَّامًا مَّعْدُودَاتٍ ۖ وَغَرَّهُمْ فِي دِينِهِم مَّا كَانُوا يَفْتَرُونَ',
            'english'       => 'That is because they say, "Never will the Fire touch us except for [a few] numbered days," and [because] they were deluded in their religion by what they were inventing.',
            'bangla'        => 'এমন ছিল, কারণ তারা বলে -- \'\'আগুন আমাদের কদাচ স্পর্শ করবে না গুনতির কয়েকটি দিন ছাড়া।’’ আর তাদের ধর্মমতে তারা নিজেদের প্রতারণা করছে তারা যা জালিয়াতি করে চলেছে তার দ্বারা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 25,
            'page_no'       => 53,
            'jaz_no'        => 3,
            'arabic'        => 'فَكَيْفَ إِذَا جَمَعْنَاهُمْ لِيَوْمٍ لَّا رَيْبَ فِيهِ وَوُفِّيَتْ كُلُّ نَفْسٍ مَّا كَسَبَتْ وَهُمْ لَا يُظْلَمُونَ',
            'english'       => 'So how will it be when We assemble them for a Day about which there is no doubt? And each soul will be compensated [in full for] what it earned, and they will not be wronged.',
            'bangla'        => 'কাজেই কেমন হবে, যখন আমরা তাদের জমা করবো এমন এক দিনে যার সন্বন্ধে নেই কোনো সন্দেহ, এবং প্রত্যেক সত্ত্বাকে পুরোপুরি প্রতিদান করা হবে যা সে অর্জন করেছে, আর তাদের প্রতি অন্যায় করা হবে না?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 26,
            'page_no'       => 53,
            'jaz_no'        => 3,
            'arabic'        => 'قُلِ اللَّهُمَّ مَالِكَ الْمُلْكِ تُؤْتِي الْمُلْكَ مَن تَشَاءُ وَتَنزِعُ الْمُلْكَ مِمَّن تَشَاءُ وَتُعِزُّ مَن تَشَاءُ وَتُذِلُّ مَن تَشَاءُ ۖ بِيَدِكَ الْخَيْرُ ۖ إِنَّكَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
            'english'       => 'Say, "O Allah, Owner of Sovereignty, You give sovereignty to whom You will and You take sovereignty away from whom You will. You honor whom You will and You humble whom You will. In Your hand is [all] good. Indeed, You are over all things competent.',
            'bangla'        => 'বলো -- \'\'হে আল্লাহ্‌! সাম্রাজ্যের মালিক! তুমি যাকে ইচ্ছা কর তাকে সাম্রাজ্য প্রদান করো, আবার যার কাছ থেকে ইচ্ছা কর রাজত্ব ছিনিয়ে নাও, আর যাকে খুশী সম্মানিত করো, আবার যাকে খুশী অপমানিত করো, -- তোমার হাতেই রয়েছে কল্যাণ। নিঃসন্দেহ তুমি সব-কিছুর উপরে সর্বশক্তিমান।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 27,
            'page_no'       => 53,
            'jaz_no'        => 3,
            'arabic'        => 'تُولِجُ اللَّيْلَ فِي النَّهَارِ وَتُولِجُ النَّهَارَ فِي اللَّيْلِ ۖ وَتُخْرِجُ الْحَيَّ مِنَ الْمَيِّتِ وَتُخْرِجُ الْمَيِّتَ مِنَ الْحَيِّ ۖ وَتَرْزُقُ مَن تَشَاءُ بِغَيْرِ حِسَابٍ',
            'english'       => 'You cause the night to enter the day, and You cause the day to enter the night; and You bring the living out of the dead, and You bring the dead out of the living. And You give provision to whom You will without account."',
            'bangla'        => '\'\'তুমি রাতকে প্রবেশ করাও দিনে, আবার দিনকে প্রবেশ করাও রাতে, আর প্রাণবানদের উদগত করো মৃত থেকে, আবার মৃতকে উদগত করো জীবন্ত থেকে, আর যাকে ইচ্ছা কর বেহিসাব রিযেক দান করো।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 28,
            'page_no'       => 53,
            'jaz_no'        => 3,
            'arabic'        => 'لَّا يَتَّخِذِ الْمُؤْمِنُونَ الْكَافِرِينَ أَوْلِيَاءَ مِن دُونِ الْمُؤْمِنِينَ ۖ وَمَن يَفْعَلْ ذَٰلِكَ فَلَيْسَ مِنَ اللَّهِ فِي شَيْءٍ إِلَّا أَن تَتَّقُوا مِنْهُمْ تُقَاةً ۗ وَيُحَذِّرُكُمُ اللَّهُ نَفْسَهُ ۗ وَإِلَى اللَّهِ الْمَصِيرُ',
            'english'       => 'Let not believers take disbelievers as allies rather than believers. And whoever [of you] does that has nothing with Allah, except when taking precaution against them in prudence. And Allah warns you of Himself, and to Allah is the [final] destination.',
            'bangla'        => 'বিশ্বাসীরা যেন বিশ্বাসীদের বাদ দিয়ে অবিশ্বাসীদের বন্ধুরূপে গ্রহণ না করে। আর যে এমন করবে আল্লাহ্‌র কাছ থেকে কোনো কিছুই থাকবে না, তবে যদি তোমরা তাদের থেকে সতর্কতা স্বরূপ হুশিয়াঁর হতে চাও। আর আল্লাহ্ তোমাদের তাঁর সন্বন্ধে সাবধান করেছেন, আর আল্লাহ্‌র দিকেই শেষ গতি।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 29,
            'page_no'       => 53,
            'jaz_no'        => 3,
            'arabic'        => 'قُلْ إِن تُخْفُوا مَا فِي صُدُورِكُمْ أَوْ تُبْدُوهُ يَعْلَمْهُ اللَّهُ ۗ وَيَعْلَمُ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ ۗ وَاللَّهُ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
            'english'       => 'Say, "Whether you conceal what is in your breasts or reveal it, Allah knows it. And He knows that which is in the heavens and that which is on the earth. And Allah is over all things competent.',
            'bangla'        => 'বলো -- \'\'তোমাদের অন্তরে যা আছে তা লুকিয়ে রাখো, অথবা তা প্রকাশ করো, আল্লাহ্ তা জানেন। আর তিনি জানেন যা-কিছু আছে মহাকাশে ও যা-কিছু পৃথিবীতে। আর আল্লাহ্ সব-কিছুর উপরে সর্বশক্তিমান।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 30,
            'page_no'       => 54,
            'jaz_no'        => 3,
            'arabic'        => 'يَوْمَ تَجِدُ كُلُّ نَفْسٍ مَّا عَمِلَتْ مِنْ خَيْرٍ مُّحْضَرًا وَمَا عَمِلَتْ مِن سُوءٍ تَوَدُّ لَوْ أَنَّ بَيْنَهَا وَبَيْنَهُ أَمَدًا بَعِيدًا ۗ وَيُحَذِّرُكُمُ اللَّهُ نَفْسَهُ ۗ وَاللَّهُ رَءُوفٌ بِالْعِبَادِ',
            'english'       => 'The Day every soul will find what it has done of good present [before it] and what it has done of evil, it will wish that between itself and that [evil] was a great distance. And Allah warns you of Himself, and Allah is Kind to [His] servants."',
            'bangla'        => 'সেদিন প্রত্যেক সত্ত্বা দেখতে পাবে ভালো যা সে করেছে তা হাজির করা হয়েছে, আর মন্দ যা সে করেছে তাও, সে চাইবে -- তার মধ্যে আর ওর মধ্যে যদি সুদীর্ঘ ব্যবধান থাকতো! কিন্তু আল্লাহ্ তোমাদের সাবধান করছেন তাঁর সন্বন্ধে। আর আল্লাহ্ স্নেহময়।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 31,
            'page_no'       => 54,
            'jaz_no'        => 3,
            'arabic'        => 'قُلْ إِن كُنتُمْ تُحِبُّونَ اللَّهَ فَاتَّبِعُونِي يُحْبِبْكُمُ اللَّهُ وَيَغْفِرْ لَكُمْ ذُنُوبَكُمْ ۗ وَاللَّهُ غَفُورٌ رَّحِيمٌ',
            'english'       => 'Say, [O Muhammad], "If you should love Allah, then follow me, [so] Allah will love you and forgive you your sins. And Allah is Forgiving and Merciful."',
            'bangla'        => 'বলো -- \'\'তোমরা যদি আল্লাহ্‌কে ভালোবাস তবে তোমরা আমায় অনুসরণ করো, তা হলে আল্লাহ্ তোমাদের ভালবাসবেন, আর তোমাদের পরিত্রাণ করবেন তোমাদের অপরাধ থেকে। কেননা আল্লাহ্ পরিত্রাণকারী, অফুরন্ত ফলদাতা।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 32,
            'page_no'       => 54,
            'jaz_no'        => 3,
            'arabic'        => 'قُلْ أَطِيعُوا اللَّهَ وَالرَّسُولَ ۖ فَإِن تَوَلَّوْا فَإِنَّ اللَّهَ لَا يُحِبُّ الْكَافِرِينَ',
            'english'       => 'Say, "Obey Allah and the Messenger." But if they turn away - then indeed, Allah does not like the disbelievers.',
            'bangla'        => 'বলো -- \'\'আল্লাহ্‌র আজ্ঞানুবর্তী হও আর রসূলেরও।’’ কিন্তু যদি তারা ফিরে যায়, তবে নিঃসন্দেহ আল্লাহ্ অবিশ্বাসকারীদের ভালোবাসেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 33,
            'page_no'       => 54,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ اللَّهَ اصْطَفَىٰ آدَمَ وَنُوحًا وَآلَ إِبْرَاهِيمَ وَآلَ عِمْرَانَ عَلَى الْعَالَمِينَ',
            'english'       => 'Indeed, Allah chose Adam and Noah and the family of Abraham and the family of \'Imran over the worlds -',
            'bangla'        => 'আল্লাহ্ নিশ্চয়ই আদম ও নূহ্ ও ইব্রাহীমের বংশধর, আর ইমরানের পরিবারকে মানবগোষ্ঠীর মধ্যে উচ্চ মর্যাদা দিয়েছিলেন,'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 34,
            'page_no'       => 54,
            'jaz_no'        => 3,
            'arabic'        => 'ذُرِّيَّةً بَعْضُهَا مِن بَعْضٍ ۗ وَاللَّهُ سَمِيعٌ عَلِيمٌ',
            'english'       => 'Descendants, some of them from others. And Allah is Hearing and Knowing.',
            'bangla'        => 'এক বংশ পরম্পরা -- একের থেকে তাদের অন্যরা। আর আল্লাহ্ সর্বশ্রোতা, সর্বজ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 35,
            'page_no'       => 54,
            'jaz_no'        => 3,
            'arabic'        => 'إِذْ قَالَتِ امْرَأَتُ عِمْرَانَ رَبِّ إِنِّي نَذَرْتُ لَكَ مَا فِي بَطْنِي مُحَرَّرًا فَتَقَبَّلْ مِنِّي ۖ إِنَّكَ أَنتَ السَّمِيعُ الْعَلِيمُ',
            'english'       => '[Mention, O Muhammad], when the wife of \'Imran said, "My Lord, indeed I have pledged to You what is in my womb, consecrated [for Your service], so accept this from me. Indeed, You are the Hearing, the Knowing."',
            'bangla'        => 'স্মরণ করো! ইমরান বংশের একজন স্ত্রীলোক বললে -- \'\'আমার প্রভু! আমার গর্ভে যে আছে তাকে আমি তোমার জন্য মানত করলাম একান্তভাবে, অতএব আমার থেকে কবুল করো, নিঃসন্দেহ তুমি নিজেই সর্বশ্রোতা, সর্বজ্ঞাতা।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 36,
            'page_no'       => 54,
            'jaz_no'        => 3,
            'arabic'        => 'فَلَمَّا وَضَعَتْهَا قَالَتْ رَبِّ إِنِّي وَضَعْتُهَا أُنثَىٰ وَاللَّهُ أَعْلَمُ بِمَا وَضَعَتْ وَلَيْسَ الذَّكَرُ كَالْأُنثَىٰ ۖ وَإِنِّي سَمَّيْتُهَا مَرْيَمَ وَإِنِّي أُعِيذُهَا بِكَ وَذُرِّيَّتَهَا مِنَ الشَّيْطَانِ الرَّجِيمِ',
            'english'       => 'But when she delivered her, she said, "My Lord, I have delivered a female." And Allah was most knowing of what she delivered, "And the male is not like the female. And I have named her Mary, and I seek refuge for her in You and [for] her descendants from Satan, the expelled [from the mercy of Allah]."',
            'bangla'        => 'তারপর যখন সে তাকে প্রসব করলো, সে বললে -- \'\'প্রভু! আমি কিন্তু তাকে প্রসব করলাম একটি কন্যা!’’ আর আল্লাহ্ ভালো জানেন কি সে প্রসব করলো। আর, বেটাছেলে মেয়েছেলের মতো নয়। \'\'আর আমি তার নাম রাখলাম মরিয়ম, আর আমি অবশ্যই তোমার আশ্রয়ে তাকে রাখছি, আর তার সন্তানসন্ততিকেও, ভ্রষ্ট শয়তানের থেকে।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 37,
            'page_no'       => 54,
            'jaz_no'        => 3,
            'arabic'        => 'فَتَقَبَّلَهَا رَبُّهَا بِقَبُولٍ حَسَنٍ وَأَنبَتَهَا نَبَاتًا حَسَنًا وَكَفَّلَهَا زَكَرِيَّا ۖ كُلَّمَا دَخَلَ عَلَيْهَا زَكَرِيَّا الْمِحْرَابَ وَجَدَ عِندَهَا رِزْقًا ۖ قَالَ يَا مَرْيَمُ أَنَّىٰ لَكِ هَـٰذَا ۖ قَالَتْ هُوَ مِنْ عِندِ اللَّهِ ۖ إِنَّ اللَّهَ يَرْزُقُ مَن يَشَاءُ بِغَيْرِ حِسَابٍ',
            'english'       => 'So her Lord accepted her with good acceptance and caused her to grow in a good manner and put her in the care of Zechariah. Every time Zechariah entered upon her in the prayer chamber, he found with her provision. He said, "O Mary, from where is this [coming] to you?" She said, "It is from Allah. Indeed, Allah provides for whom He wills without account."',
            'bangla'        => 'অতএব তার প্রভু তাকে কবুল করলেন সুন্দর স্বীকৃতির সাথে, ফলে তাকে বর্ধিত করলেন সুন্দর বর্ধনে, আর তাকে সমর্পণ করলেন যাকারিয়ার অভিভাকত্বে। যখন যাকারিয়া তাকে দেখতে উপাসনাস্থলে প্রবেশ করতেন তিনি তার কাছে দেখতে পেতেন রিযেক। তিনি বললেন -- \'\'হে মরিয়ম! এ তোমার কাছে কোথা থেকে?’’ সে বললে -- \'\'এ আল্লাহ্‌র দরবার থেকে।’’ নিঃসন্দেহ আল্লাহ্ যাকে ইচ্ছে করেন তাকে বেহিসাব রিযেক দান করেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 38,
            'page_no'       => 55,
            'jaz_no'        => 3,
            'arabic'        => 'هُنَالِكَ دَعَا زَكَرِيَّا رَبَّهُ ۖ قَالَ رَبِّ هَبْ لِي مِن لَّدُنكَ ذُرِّيَّةً طَيِّبَةً ۖ إِنَّكَ سَمِيعُ الدُّعَاءِ',
            'english'       => 'At that, Zechariah called upon his Lord, saying, "My Lord, grant me from Yourself a good offspring. Indeed, You are the Hearer of supplication."',
            'bangla'        => 'সঙ্গে-সঙ্গে সেইখানেই যাকারিয়া তাঁর প্রভুর কাছে প্রার্থনা করলেন, তিনি বললেন -- \'\'আমার প্রভু! তোমার নিকট থেকে আমাকে একটি উত্তম সন্তান দাও। নিঃসন্দেহ তুমি প্রার্থনার শ্রোতা।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 39,
            'page_no'       => 55,
            'jaz_no'        => 3,
            'arabic'        => 'فَنَادَتْهُ الْمَلَائِكَةُ وَهُوَ قَائِمٌ يُصَلِّي فِي الْمِحْرَابِ أَنَّ اللَّهَ يُبَشِّرُكَ بِيَحْيَىٰ مُصَدِّقًا بِكَلِمَةٍ مِّنَ اللَّهِ وَسَيِّدًا وَحَصُورًا وَنَبِيًّا مِّنَ الصَّالِحِينَ',
            'english'       => 'So the angels called him while he was standing in prayer in the chamber, "Indeed, Allah gives you good tidings of John, confirming a word from Allah and [who will be] honorable, abstaining [from women], and a prophet from among the righteous."',
            'bangla'        => 'ফিরিশ্‌তারা তাঁকে ডেকে বললে আর তিনি তখন উপাসনাস্থলে নামাযে দাঁড়িয়েছিলেন -- \'\'আল্লাহ্ নিশ্চয়ই আপনাকে সুসংবাদ দিচ্ছেন ইয়াহ্‌য়ার, আল্লাহ্‌র বাণীর সত্যতা প্রতিপন্ন করতে, আর সম্মানিত ও চরিত্রবান, আর সাধুপুরুষদের মধ্য থেকে একজন নবী।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 40,
            'page_no'       => 55,
            'jaz_no'        => 3,
            'arabic'        => 'قَالَ رَبِّ أَنَّىٰ يَكُونُ لِي غُلَامٌ وَقَدْ بَلَغَنِيَ الْكِبَرُ وَامْرَأَتِي عَاقِرٌ ۖ قَالَ كَذَٰلِكَ اللَّهُ يَفْعَلُ مَا يَشَاءُ',
            'english'       => 'He said, "My Lord, how will I have a boy when I have reached old age and my wife is barren?" The angel said, "Such is Allah; He does what He wills."',
            'bangla'        => 'তিনি বললেন -- \'\'আমার প্রভু! কোথা থেকে আমার ছেলে হতে পারে, যখন ইতিপূর্বেই আমার কাছে বার্ধক্য এসে হাজির হয়েছে, আর আমার স্ত্রী বন্ধ্যা?’’ তিনি বললেন -- \'\'এইভাবেই, -- আল্লাহ্ তাই করেন যা তিনি চান।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 41,
            'page_no'       => 55,
            'jaz_no'        => 3,
            'arabic'        => 'قَالَ رَبِّ اجْعَل لِّي آيَةً ۖ قَالَ آيَتُكَ أَلَّا تُكَلِّمَ النَّاسَ ثَلَاثَةَ أَيَّامٍ إِلَّا رَمْزًا ۗ وَاذْكُر رَّبَّكَ كَثِيرًا وَسَبِّحْ بِالْعَشِيِّ وَالْإِبْكَارِ',
            'english'       => 'He said, "My Lord, make for me a sign." He Said, "Your sign is that you will not [be able to] speak to the people for three days except by gesture. And remember your Lord much and exalt [Him with praise] in the evening and the morning."',
            'bangla'        => 'তিনি বললেন -- \'\'আমার প্রভু! আমার জন্য একটি নিদর্শন নির্ধারিত করো।’’ তিনি বললেন -- \'\'তোমার নিদর্শন হচ্ছে এই যে তুমি লোকজনের সাথে তিনদিন কথা বলবে না শুধু ইশারাতে ছাড়া, আর তোমার প্রভুকে খুব করে স্মরণ করো নিশাসমাগমে ও ভোরবেলা।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 42,
            'page_no'       => 55,
            'jaz_no'        => 3,
            'arabic'        => 'وَإِذْ قَالَتِ الْمَلَائِكَةُ يَا مَرْيَمُ إِنَّ اللَّهَ اصْطَفَاكِ وَطَهَّرَكِ وَاصْطَفَاكِ عَلَىٰ نِسَاءِ الْعَالَمِينَ',
            'english'       => 'And [mention] when the angels said, "O Mary, indeed Allah has chosen you and purified you and chosen you above the women of the worlds.',
            'bangla'        => 'আর স্মরণ করো! ফিরিশ্‌তারা বললেন -- \'\'হে মরিয়ম! নিশ্চয়ই আল্লাহ্ তোমাকে নির্বাচন করেছেন, আর তোমায় পবিত্র করেছেন, আর বিশ্বজগতের সব নারীর উপরে তোমায় নির্বাচন করেছেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 43,
            'page_no'       => 55,
            'jaz_no'        => 3,
            'arabic'        => 'يَا مَرْيَمُ اقْنُتِي لِرَبِّكِ وَاسْجُدِي وَارْكَعِي مَعَ الرَّاكِعِينَ',
            'english'       => 'O Mary, be devoutly obedient to your Lord and prostrate and bow with those who bow [in prayer]."',
            'bangla'        => '\'\'হে মরিয়ম! তোমার প্রভুর অনুগত হয়ে থেকো, আর সিজদা করো ও রুকু করো রুকুকারীদের সাথে।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 44,
            'page_no'       => 55,
            'jaz_no'        => 3,
            'arabic'        => 'ذَٰلِكَ مِنْ أَنبَاءِ الْغَيْبِ نُوحِيهِ إِلَيْكَ ۚ وَمَا كُنتَ لَدَيْهِمْ إِذْ يُلْقُونَ أَقْلَامَهُمْ أَيُّهُمْ يَكْفُلُ مَرْيَمَ وَمَا كُنتَ لَدَيْهِمْ إِذْ يَخْتَصِمُونَ',
            'english'       => 'That is from the news of the unseen which We reveal to you, [O Muhammad]. And you were not with them when they cast their pens as to which of them should be responsible for Mary. Nor were you with them when they disputed.',
            'bangla'        => 'এ হচ্ছে অদৃশ্য বার্তাসমূহের থেকে যে-সব তোমার কাছে আমরা প্রত্যাদিষ্ট করছি। আর তুমি তাদের কাছে ছিলে না যখন তারা তাদের কলম নিক্ষেপ করছিল তাদের মধ্যে কে মরিয়মের ভার নেবে সে সম্পর্কে, আর তুমি তাদের নিকটে ছিলে না যখন তারা পরস্পর বচসা করছিল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 45,
            'page_no'       => 55,
            'jaz_no'        => 3,
            'arabic'        => 'إِذْ قَالَتِ الْمَلَائِكَةُ يَا مَرْيَمُ إِنَّ اللَّهَ يُبَشِّرُكِ بِكَلِمَةٍ مِّنْهُ اسْمُهُ الْمَسِيحُ عِيسَى ابْنُ مَرْيَمَ وَجِيهًا فِي الدُّنْيَا وَالْآخِرَةِ وَمِنَ الْمُقَرَّبِينَ',
            'english'       => '[And mention] when the angels said, "O Mary, indeed Allah gives you good tidings of a word from Him, whose name will be the Messiah, Jesus, the son of Mary - distinguished in this world and the Hereafter and among those brought near [to Allah].',
            'bangla'        => 'স্মরণ করো! ফিরিশ্‌তারা বললে -- \'\'হে মরিয়ম, নিঃসন্দেহ আল্লাহ্ তোমাকে সুসংবাদ দিচ্ছেন তাঁর তরফ থেকে একটি বাণী দ্বারা -- তাঁর নাম হচ্ছে মসীহ্‌, মরিয়ম-পুত্র ঈসা, ইহকালে ও পরকালে সম্মানের যোগ্য, আর নৈকট্যে আনীতদের অন্তর্গত।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 46,
            'page_no'       => 56,
            'jaz_no'        => 3,
            'arabic'        => 'وَيُكَلِّمُ النَّاسَ فِي الْمَهْدِ وَكَهْلًا وَمِنَ الصَّالِحِينَ',
            'english'       => 'He will speak to the people in the cradle and in maturity and will be of the righteous."',
            'bangla'        => '\'\'আর তিনি লোকদের সাথে কথা বলবেন দোলনায় এবং বার্ধক্যকালে, আর তিনি সুকর্মীদের অন্যতম।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 47,
            'page_no'       => 56,
            'jaz_no'        => 3,
            'arabic'        => 'قَالَتْ رَبِّ أَنَّىٰ يَكُونُ لِي وَلَدٌ وَلَمْ يَمْسَسْنِي بَشَرٌ ۖ قَالَ كَذَٰلِكِ اللَّهُ يَخْلُقُ مَا يَشَاءُ ۚ إِذَا قَضَىٰ أَمْرًا فَإِنَّمَا يَقُولُ لَهُ كُن فَيَكُونُ',
            'english'       => 'She said, "My Lord, how will I have a child when no man has touched me?" [The angel] said, "Such is Allah; He creates what He wills. When He decrees a matter, He only says to it, \'Be,\' and it is.',
            'bangla'        => 'তিনি বললেন -- \'\'আমার প্রভু! কোথা থেকে আমার ছেলে হবে যখন পুরুষমানুষ আমায় স্পর্শ করে নি?’’ তিনি বললেন -- \'\'এইভাবেই, -- আল্লাহ্ তাই সৃষ্টি করেন যা তিনি চান। তিনি যখন কোনো বিষয়ে সিদ্ধান্ত করেন, তিনি তখন সে সন্বন্ধে শুধু বলেন -- \'\'হও’’ আর তা হয়ে যায়।'
        ]);


        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 48,
            'page_no'       => 56,
            'jaz_no'        => 3,
            'arabic'        => 'وَيُعَلِّمُهُ الْكِتَابَ وَالْحِكْمَةَ وَالتَّوْرَاةَ وَالْإِنجِيلَ',
            'english'       => 'And He will teach him writing and wisdom and the Torah and the Gospel',
            'bangla'        => '\'\'আর তিনি তাঁকে শেখাবেন কিতাব ও জ্ঞানভান্ডার, আর তওরাত ও ইনজীল।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 49,
            'page_no'       => 56,
            'jaz_no'        => 3,
            'arabic'        => 'وَرَسُولًا إِلَىٰ بَنِي إِسْرَائِيلَ أَنِّي قَدْ جِئْتُكُم بِآيَةٍ مِّن رَّبِّكُمْ ۖ أَنِّي أَخْلُقُ لَكُم مِّنَ الطِّينِ كَهَيْئَةِ الطَّيْرِ فَأَنفُخُ فِيهِ فَيَكُونُ طَيْرًا بِإِذْنِ اللَّهِ ۖ وَأُبْرِئُ الْأَكْمَهَ وَالْأَبْرَصَ وَأُحْيِي الْمَوْتَىٰ بِإِذْنِ اللَّهِ ۖ وَأُنَبِّئُكُم بِمَا تَأْكُلُونَ وَمَا تَدَّخِرُونَ فِي بُيُوتِكُمْ ۚ إِنَّ فِي ذَٰلِكَ لَآيَةً لَّكُمْ إِن كُنتُم مُّؤْمِنِينَ',
            'english'       => 'And [make him] a messenger to the Children of Israel, [who will say], \'Indeed I have come to you with a sign from your Lord in that I design for you from clay [that which is] like the form of a bird, then I breathe into it and it becomes a bird by permission of Allah. And I cure the blind and the leper, and I give life to the dead - by permission of Allah. And I inform you of what you eat and what you store in your houses. Indeed in that is a sign for you, if you are believers.',
            'bangla'        => '\'\'আর ইসরাইল বংশীয়দের জন্য রসূল। \'নিঃসন্দেহ আমি তোমাদের কাছে আসছি তোমাদের প্রভুর কাছ থেকে একটি নিদর্শন নিয়ে, আমি অবশ্যই তোমাদের জন্য মাটি থেকে তৈরি করি পাখির মতো মূর্তি, তারপর তাতে আমি ফুৎকার দিই, তখন সেটি পাখি হয়ে যায় আল্লাহ্‌র ইচ্ছায়। আর আমি আরোগ্য করি অন্ধকে ও কুষ্ঠ রুগীকে, আর আমি জীবন দিই মৃতকে আল্লাহ্‌র ইচ্ছায়। আর আমি তোমাদের খবর দিই যেসব তোমরা খাবে আর যা তোমরা নিজেদের বাড়িতে মজুত রাখো। নিঃসন্দেহ এতে বিশেষ নিদর্শন আছে তোমাদের জন্য যদি তোমরা বিশ্বাসী হও।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 50,
            'page_no'       => 56,
            'jaz_no'        => 3,
            'arabic'        => 'وَمُصَدِّقًا لِّمَا بَيْنَ يَدَيَّ مِنَ التَّوْرَاةِ وَلِأُحِلَّ لَكُم بَعْضَ الَّذِي حُرِّمَ عَلَيْكُمْ ۚ وَجِئْتُكُم بِآيَةٍ مِّن رَّبِّكُمْ فَاتَّقُوا اللَّهَ وَأَطِيعُونِ',
            'english'       => 'And [I have come] confirming what was before me of the Torah and to make lawful for you some of what was forbidden to you. And I have come to you with a sign from your Lord, so fear Allah and obey me.',
            'bangla'        => '\'\'আর তওরাতের যা-কিছু আমার কাছে ছিল আমি তার প্রতিপাদক, আর আমি যাতে তোমাদের জন্য বৈধ করতে পারি কোনো কোনো বিষয় যা তোমাদের জন্য নিষিদ্ধ হয়েছিল, আর আমি তোমাদের কাছে এসেছি তোমাদের প্রভুর কাছ থেকে একটি বাণী নিয়ে, অতএব আল্লাহ্‌কে ভয়-শ্রদ্ধা করো ও আমার অনুগত হও।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 51,
            'page_no'       => 56,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ اللَّهَ رَبِّي وَرَبُّكُمْ فَاعْبُدُوهُ ۗ هَـٰذَا صِرَاطٌ مُّسْتَقِيمٌ',
            'english'       => 'Indeed, Allah is my Lord and your Lord, so worship Him. That is the straight path."',
            'bangla'        => '\'\'নিঃসন্দেহ আল্লাহ্ আমার প্রভু ও তোমাদেরও প্রভু, অতএব তাঁরই উপাসনা করো, -- এই হচ্ছে সহজ-সঠিক পথ।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 52,
            'page_no'       => 56,
            'jaz_no'        => 3,
            'arabic'        => 'فَلَمَّا أَحَسَّ عِيسَىٰ مِنْهُمُ الْكُفْرَ قَالَ مَنْ أَنصَارِي إِلَى اللَّهِ ۖ قَالَ الْحَوَارِيُّونَ نَحْنُ أَنصَارُ اللَّهِ آمَنَّا بِاللَّهِ وَاشْهَدْ بِأَنَّا مُسْلِمُونَ',
            'english'       => 'But when Jesus felt [persistence in] disbelief from them, he said, "Who are my supporters for [the cause of] Allah?" The disciples said, "We are supporters for Allah. We have believed in Allah and testify that we are Muslims [submitting to Him].',
            'bangla'        => 'কিন্তু যখন ঈসা তাদের মধ্যে অবিশ্বাস বোধ করলেন, তিনি বললেন -- \'\'কারা আল্লাহ্‌র পথে আমার সাহায্যকারী হবে?’’ হাওয়ারীরা বললে -- \'\'আমরা আল্লাহ্‌র সাহায্যকারী হব, আমরা আল্লাহ্‌তে বিশ্বাস করি, আর তুমি সাক্ষ্য দাও যে আমরা হচ্ছি আ‌ত্মসমর্পণকারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 53,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'رَبَّنَا آمَنَّا بِمَا أَنزَلْتَ وَاتَّبَعْنَا الرَّسُولَ فَاكْتُبْنَا مَعَ الشَّاهِدِينَ',
            'english'       => 'Our Lord, we have believed in what You revealed and have followed the messenger Jesus, so register us among the witnesses [to truth]."',
            'bangla'        => '\'\'আমাদের প্রভু! আমরা ঈমান এনেছি তাতে যা তুমি অবতারণ করেছ, আর আমরা রসূলকে অনুসরণ করি, অতএব আমাদের লিখে রাখ সাক্ষ্যদাতাদের সাথে।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 54,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'وَمَكَرُوا وَمَكَرَ اللَّهُ ۖ وَاللَّهُ خَيْرُ الْمَاكِرِينَ',
            'english'       => 'And the disbelievers planned, but Allah planned. And Allah is the best of planners.',
            'bangla'        => 'আর তারা চক্রান্ত করেছিল, আর আল্লাহ্‌ও পরিকল্পনা করেছিলেন। আর আল্লাহ্ পরিকল্পনাকারীদের মধ্যে সর্বোত্তম।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 55,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'إِذْ قَالَ اللَّهُ يَا عِيسَىٰ إِنِّي مُتَوَفِّيكَ وَرَافِعُكَ إِلَيَّ وَمُطَهِّرُكَ مِنَ الَّذِينَ كَفَرُوا وَجَاعِلُ الَّذِينَ اتَّبَعُوكَ فَوْقَ الَّذِينَ كَفَرُوا إِلَىٰ يَوْمِ الْقِيَامَةِ ۖ ثُمَّ إِلَيَّ مَرْجِعُكُمْ فَأَحْكُمُ بَيْنَكُمْ فِيمَا كُنتُمْ فِيهِ تَخْتَلِفُونَ',
            'english'       => '[Mention] when Allah said, "O Jesus, indeed I will take you and raise you to Myself and purify you from those who disbelieve and make those who follow you [in submission to Allah alone] superior to those who disbelieve until the Day of Resurrection. Then to Me is your return, and I will judge between you concerning that in which you used to differ.',
            'bangla'        => 'স্মরণ করো! আল্লাহ্ বললেন -- \'\'হে ঈসা, আমি নিশ্চয়ই তোমার মৃত্যু ঘটাব, এবং আমি তোমাকে আমার দিকে উন্নীত করবো, আর তোমাকে পরিশোধিত করবো যারা অবিশ্বাস পোষণ করে তাদের থেকে, আর যারা তোমায় অনুসরণ করবে তাদের আমি স্থান দেবো যারা অবিশ্বাস পোষণ করে তাদের উপরে কিয়ামতের দিন পর্যন্ত, এরপর আমারই কাছে তোমাদের প্রত্যাবর্তন স্থান, আর আমি তোমাদের মধ্যে বিচার করবো যে-বিষয়ে তোমরা মতভেদ করছিলে সেই বিষয়ে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 56,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'فَأَمَّا الَّذِينَ كَفَرُوا فَأُعَذِّبُهُمْ عَذَابًا شَدِيدًا فِي الدُّنْيَا وَالْآخِرَةِ وَمَا لَهُم مِّن نَّاصِرِينَ',
            'english'       => 'And as for those who disbelieved, I will punish them with a severe punishment in this world and the Hereafter, and they will have no helpers."',
            'bangla'        => 'অতএব যারা অবিশ্বাস পোষণ করে আমি তাদের শাস্তি দেবো কঠোর শাস্তিতে এই দুনিয়াতে ও পরলোকে, আর তাদের জন্য সাহায্যকারীদের কেউ থাকবে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 57,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'وَأَمَّا الَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ فَيُوَفِّيهِمْ أُجُورَهُمْ ۗ وَاللَّهُ لَا يُحِبُّ الظَّالِمِينَ',
            'english'       => 'But as for those who believed and did righteous deeds, He will give them in full their rewards, and Allah does not like the wrongdoers.',
            'bangla'        => 'আর যারা ঈমান এনেছে ও সুকর্ম করেছে, তিনি তাদের প্রাপ্য পুরোপরি তাদের দেবেন। আর অন্যায়কারীদের আল্লাহ্ ভালোবাসেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 58,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'ذَٰلِكَ نَتْلُوهُ عَلَيْكَ مِنَ الْآيَاتِ وَالذِّكْرِ الْحَكِيمِ',
            'english'       => 'This is what We recite to you, [O Muhammad], of [Our] verses and the precise [and wise] message.',
            'bangla'        => 'এটিই যা আমি তোমার কাছে বর্ণনা করছি নির্দেশবাণী ও জ্ঞানময় স্মারক থেকে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 59,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ مَثَلَ عِيسَىٰ عِندَ اللَّهِ كَمَثَلِ آدَمَ ۖ خَلَقَهُ مِن تُرَابٍ ثُمَّ قَالَ لَهُ كُن فَيَكُونُ',
            'english'       => 'Indeed, the example of Jesus to Allah is like that of Adam. He created Him from dust; then He said to him, "Be," and he was.',
            'bangla'        => 'নিঃসন্দেহ ঈসার দৃষ্টান্ত হচ্ছে আল্লাহ্‌র কাছে আদমের দৃষ্টান্তের মতো। তিনি তাঁকে সৃষ্টি করেছিলেন মাটি থেকে; তারপর তাঁকে বলেছিলেন -- \'\'হও’’ আর তিনি হয়ে গেলেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 60,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'الْحَقُّ مِن رَّبِّكَ فَلَا تَكُن مِّنَ الْمُمْتَرِينَ',
            'english'       => 'The truth is from your Lord, so do not be among the doubters.',
            'bangla'        => 'তোমার প্রভুর কাছ থেকে আসা ধ্রুবসত্য, কাজেই সংশয়ীদের দলভুক্ত হয়ো না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 61,
            'page_no'       => 57,
            'jaz_no'        => 3,
            'arabic'        => 'فَمَنْ حَاجَّكَ فِيهِ مِن بَعْدِ مَا جَاءَكَ مِنَ الْعِلْمِ فَقُلْ تَعَالَوْا نَدْعُ أَبْنَاءَنَا وَأَبْنَاءَكُمْ وَنِسَاءَنَا وَنِسَاءَكُمْ وَأَنفُسَنَا وَأَنفُسَكُمْ ثُمَّ نَبْتَهِلْ فَنَجْعَل لَّعْنَتَ اللَّهِ عَلَى الْكَاذِبِينَ',
            'english'       => 'Then whoever argues with you about it after [this] knowledge has come to you - say, "Come, let us call our sons and your sons, our women and your women, ourselves and yourselves, then supplicate earnestly [together] and invoke the curse of Allah upon the liars [among us]."',
            'bangla'        => 'অতএব যারা তোমার সাথে এ-বিষয়ে তর্ক করে তোমার কাছে জ্ঞানের যা এসেছে তার পরেও, তাহলে বলো -- \'\'এসো, আমরা ডেকে আনি আমাদের সন্তানদের ও তোমাদের সন্তানদের, আর আমাদের স্ত্রীলোকদের ও তোমাদের স্ত্রীলোকদের, আর আমাদের লোকজনকে ও তোমাদের লোকজনকে, তারপর কাতর প্রার্থনা করি যেন আল্লাহ্‌র অভিশাপ পড়ে মিথ্যাবাদীদের উপরে।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 62,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ هَـٰذَا لَهُوَ الْقَصَصُ الْحَقُّ ۚ وَمَا مِنْ إِلَـٰهٍ إِلَّا اللَّهُ ۚ وَإِنَّ اللَّهَ لَهُوَ الْعَزِيزُ الْحَكِيمُ',
            'english'       => 'Indeed, this is the true narration. And there is no deity except Allah. And indeed, Allah is the Exalted in Might, the Wise.',
            'bangla'        => 'নিঃসন্দেহ এই হচ্ছে যথার্থ সত্য বিবৃতি, আর আল্লাহ্ ছাড়া কোনো উপাস্য নেই। আর নিঃসন্দেহ আল্লাহ্‌, অবশ্যই তিনি মহাশক্তিশালী, পরমজ্ঞানী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 63,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'فَإِن تَوَلَّوْا فَإِنَّ اللَّهَ عَلِيمٌ بِالْمُفْسِدِينَ',
            'english'       => 'But if they turn away, then indeed - Allah is Knowing of the corrupters.',
            'bangla'        => 'কিন্তু তারা যদি ফিরে যায়, তাহলে আল্লাহ্ ফসাদকারীদের সম্যক জ্ঞাতা।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 64,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'قُلْ يَا أَهْلَ الْكِتَابِ تَعَالَوْا إِلَىٰ كَلِمَةٍ سَوَاءٍ بَيْنَنَا وَبَيْنَكُمْ أَلَّا نَعْبُدَ إِلَّا اللَّهَ وَلَا نُشْرِكَ بِهِ شَيْئًا وَلَا يَتَّخِذَ بَعْضُنَا بَعْضًا أَرْبَابًا مِّن دُونِ اللَّهِ ۚ فَإِن تَوَلَّوْا فَقُولُوا اشْهَدُوا بِأَنَّا مُسْلِمُونَ',
            'english'       => 'Say, "O People of the Scripture, come to a word that is equitable between us and you - that we will not worship except Allah and not associate anything with Him and not take one another as lords instead of Allah." But if they turn away, then say, "Bear witness that we are Muslims [submitting to Him]."',
            'bangla'        => 'বলো -- \'\'হে গ্রন্থপ্রাপ্ত লোকেরা, আমাদের মধ্যে ও তোমাদের মধ্যে পরস্পর সমঝোথার মাঝে এসো, যেন আমরা আল্লাহ্ ছাড়া আর কারো এবাদত করবো না, আর তাঁর সাথে অন্য কিছুকে শরীক করবো না, আর আমরা কেউ আল্লাহ্ ছাড়া অন্য কাউকে মনিব বলে গ্রহণ করবো না।’’ কিন্তু তারা যদি ফিরে যায় তবে বলো -- \'\'সাক্ষী থাকো, আমরা কিন্তু মুসলিম।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 65,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'يَا أَهْلَ الْكِتَابِ لِمَ تُحَاجُّونَ فِي إِبْرَاهِيمَ وَمَا أُنزِلَتِ التَّوْرَاةُ وَالْإِنجِيلُ إِلَّا مِن بَعْدِهِ ۚ أَفَلَا تَعْقِلُونَ',
            'english'       => 'O People of the Scripture, why do you argue about Abraham while the Torah and the Gospel were not revealed until after him? Then will you not reason?',
            'bangla'        => 'হে গ্রন্থধারিগণ! তোমরা কেন ইব্রাহীম সন্বন্ধে হুজ্জত করো, অথচ তওরাত ও ইনজীল তাঁর পরে ছাড়া অবতীর্ণ হয় নি? তোমরা কি তাহলে বুঝো না?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 66,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'هَا أَنتُمْ هَـٰؤُلَاءِ حَاجَجْتُمْ فِيمَا لَكُم بِهِ عِلْمٌ فَلِمَ تُحَاجُّونَ فِيمَا لَيْسَ لَكُم بِهِ عِلْمٌ ۚ وَاللَّهُ يَعْلَمُ وَأَنتُمْ لَا تَعْلَمُونَ',
            'english'       => 'Here you are - those who have argued about that of which you have [some] knowledge, but why do you argue about that of which you have no knowledge? And Allah knows, while you know not.',
            'bangla'        => 'দেখো! তোমরাই তারা যারা তর্ক করেছ যে-বিষয়ে তোমাদের জ্ঞান ছিল, তবে কেন তোমরা হুজ্জত করছো যে বিষয়ে তোমাদের সম্যক জ্ঞান নেই? আর আল্লাহ্ জানেন, অথচ তোমরা জানো না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 67,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'مَا كَانَ إِبْرَاهِيمُ يَهُودِيًّا وَلَا نَصْرَانِيًّا وَلَـٰكِن كَانَ حَنِيفًا مُّسْلِمًا وَمَا كَانَ مِنَ الْمُشْرِكِينَ',
            'english'       => 'Abraham was neither a Jew nor a Christian, but he was one inclining toward truth, a Muslim [submitting to Allah]. And he was not of the polytheists.',
            'bangla'        => 'ইব্রাহীম ইহুদী ছিলেন না, খ্রীষ্টানও নহেন, বরং তিনি ছিলেন ঋজু স্বভাব, মুসলিম, আর তিনি মুশরিকদের অন্তর্ভুক্ত ছিলেন না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 68,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ أَوْلَى النَّاسِ بِإِبْرَاهِيمَ لَلَّذِينَ اتَّبَعُوهُ وَهَـٰذَا النَّبِيُّ وَالَّذِينَ آمَنُوا ۗ وَاللَّهُ وَلِيُّ الْمُؤْمِنِينَ',
            'english'       => 'Indeed, the most worthy of Abraham among the people are those who followed him [in submission to Allah] and this prophet, and those who believe [in his message]. And Allah is the ally of the believers.',
            'bangla'        => 'নিঃসন্দেহ ইব্রাহীমের নিকটতম লোক ছিলেন যাঁরা তাঁকে অনুসরণ করে চলতেন, আর এই নবী, আর যারা ঈমান এনেছে। আর আল্লাহ্ বিশ্বাসীদের রক্ষাকারী বন্ধু।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 69,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'وَدَّت طَّائِفَةٌ مِّنْ أَهْلِ الْكِتَابِ لَوْ يُضِلُّونَكُمْ وَمَا يُضِلُّونَ إِلَّا أَنفُسَهُمْ وَمَا يَشْعُرُونَ',
            'english'       => 'A faction of the people of the Scripture wish they could mislead you. But they do not mislead except themselves, and they perceive [it] not.',
            'bangla'        => 'গ্রন্থপ্রাপ্তদের একদল চায় তোমাদের বিপথগামী করতে, আর তারা বিপথে নেয় না নিজেদের ছাড়া অন্য কাউকে, আর তারা উপলব্ধি করতে পারছে না।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 70,
            'page_no'       => 58,
            'jaz_no'        => 3,
            'arabic'        => 'يَا أَهْلَ الْكِتَابِ لِمَ تَكْفُرُونَ بِآيَاتِ اللَّهِ وَأَنتُمْ تَشْهَدُونَ',
            'english'       => 'O People of the Scripture, why do you disbelieve in the verses of Allah while you witness [to their truth]?',
            'bangla'        => 'হে গ্রন্থধারিগণ! কেন তোমরা আল্লাহ্‌র নির্দেশে অবিশ্বাস পোষণ করো, যখন তোমরা প্রত্যক্ষদর্শী?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 71,
            'page_no'       => 59,
            'jaz_no'        => 3,
            'arabic'        => 'يَا أَهْلَ الْكِتَابِ لِمَ تَلْبِسُونَ الْحَقَّ بِالْبَاطِلِ وَتَكْتُمُونَ الْحَقَّ وَأَنتُمْ تَعْلَمُونَ',
            'english'       => 'O People of the Scripture, why do you confuse the truth with falsehood and conceal the truth while you know [it]?',
            'bangla'        => 'হে গ্রন্থধারিগণ! কেন তোমরা সত্যকে মিথ্যার পোশাক পরিয়ে দিচ্ছ, আর তোমরা জেনেশুনে সত্যকে লুকোচ্ছ?'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 72,
            'page_no'       => 59,
            'jaz_no'        => 3,
            'arabic'        => 'وَقَالَت طَّائِفَةٌ مِّنْ أَهْلِ الْكِتَابِ آمِنُوا بِالَّذِي أُنزِلَ عَلَى الَّذِينَ آمَنُوا وَجْهَ النَّهَارِ وَاكْفُرُوا آخِرَهُ لَعَلَّهُمْ يَرْجِعُونَ',
            'english'       => 'And a faction of the People of the Scripture say [to each other], "Believe in that which was revealed to the believers at the beginning of the day and reject it at its end that perhaps they will abandon their religion,',
            'bangla'        => 'আর গ্রন্থপ্রাপ্তদের একদল বলে -- \'\'যারা ঈমান এনেছে তাদের কাছে যা নাযিল হয়েছে তাতে তোমরাও বিশ্বাস করো দিনের আগবেলায়, আর তার অপরাহে প্রত্যাখ্যান করো, যাতে তারাও ফিরে যায়।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 73,
            'page_no'       => 59,
            'jaz_no'        => 3,
            'arabic'        => 'وَلَا تُؤْمِنُوا إِلَّا لِمَن تَبِعَ دِينَكُمْ قُلْ إِنَّ الْهُدَىٰ هُدَى اللَّهِ أَن يُؤْتَىٰ أَحَدٌ مِّثْلَ مَا أُوتِيتُمْ أَوْ يُحَاجُّوكُمْ عِندَ رَبِّكُمْ ۗ قُلْ إِنَّ الْفَضْلَ بِيَدِ اللَّهِ يُؤْتِيهِ مَن يَشَاءُ ۗ وَاللَّهُ وَاسِعٌ عَلِيمٌ',
            'english'       => 'And do not trust except those who follow your religion." Say, "Indeed, the [true] guidance is the guidance of Allah. [Do you fear] lest someone be given [knowledge] like you were given or that they would [thereby] argue with you before your Lord?" Say, "Indeed, [all] bounty is in the hand of Allah - He grants it to whom He wills. And Allah is all-Encompassing and Wise."',
            'bangla'        => '\'\'তা ছাড়া যে তোমাদের ধর্ম অনুসরণ করে তাকে ছাড়া ঈমান এনো না।’’ তুমি বলো -- \'\'নিঃসন্দেহ হেদায়ত হচ্ছে আল্লাহ্‌র হেদায়ত, কাজেই তোমাদের যা দেয়া হয়েছিল তার মতো অন্যকে দেয়া হয়েছে, অথবা তারা তোমাদের প্রভুর সামনে তোমাদের উপরে প্রভাব বিস্তার করতে পারে।’’ বলো -- \'\'নিঃসন্দেহ মহত্ত্ব আল্লাহ্‌র হাতে ন্যস্ত, তিনি তা দান করেন যাকে পছন্দ ক রেন। আর আল্লাহ্ মহাবদান্য, সর্বজ্ঞাতা।’’'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 74,
            'page_no'       => 59,
            'jaz_no'        => 3,
            'arabic'        => 'يَخْتَصُّ بِرَحْمَتِهِ مَن يَشَاءُ ۗ وَاللَّهُ ذُو الْفَضْلِ الْعَظِيمِ',
            'english'       => 'He selects for His mercy whom He wills. And Allah is the possessor of great bounty.',
            'bangla'        => 'তিনি তাঁর করুণাবশতঃ নির্বাচিত করেন যাকে পছন্দ করেন, আর আল্লাহ্ বিপুল মহিমার অধিকারী।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 75,
            'page_no'       => 59,
            'jaz_no'        => 3,
            'arabic'        => 'وَمِنْ أَهْلِ الْكِتَابِ مَنْ إِن تَأْمَنْهُ بِقِنطَارٍ يُؤَدِّهِ إِلَيْكَ وَمِنْهُم مَّنْ إِن تَأْمَنْهُ بِدِينَارٍ لَّا يُؤَدِّهِ إِلَيْكَ إِلَّا مَا دُمْتَ عَلَيْهِ قَائِمًا ۗ ذَٰلِكَ بِأَنَّهُمْ قَالُوا لَيْسَ عَلَيْنَا فِي الْأُمِّيِّينَ سَبِيلٌ وَيَقُولُونَ عَلَى اللَّهِ الْكَذِبَ وَهُمْ يَعْلَمُونَ',
            'english'       => 'And among the People of the Scripture is he who, if you entrust him with a great amount [of wealth], he will return it to you. And among them is he who, if you entrust him with a [single] silver coin, he will not return it to you unless you are constantly standing over him [demanding it]. That is because they say, "There is no blame upon us concerning the unlearned." And they speak untruth about Allah while they know [it].',
            'bangla'        => 'আর গ্রন্থপ্রাপ্তদের মধ্যে এমন লোক আছে যার কাছে তুমি যদি একগাদা আমানত রাখো সে তোমাকে তা ফিরিয়ে দেবে, আর তাদের মধ্যে এমনও আছে যার কাছে যদি তুমি একটি দিনার গচ্ছিত রাখো সে তোমাকে তা ফিরিয়ে দেবে না, যদি না তুমি তার কাছে দাঁড়িয়ে থাকো। এইরূপ কারণ তারা বলে -- \'\'অক্ষরজ্ঞানহীনদের ব্যাপারে আমাদের কোনো পথ ধরে চলার দায়িত্ব নেই।’’ আর তারা আল্লাহ্ সন্বন্ধে মিথ্যারোপ করে, যদিও তারা জানে।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 76,
            'page_no'       => 59,
            'jaz_no'        => 3,
            'arabic'        => 'بَلَىٰ مَنْ أَوْفَىٰ بِعَهْدِهِ وَاتَّقَىٰ فَإِنَّ اللَّهَ يُحِبُّ الْمُتَّقِينَ',
            'english'       => 'But yes, whoever fulfills his commitment and fears Allah - then indeed, Allah loves those who fear Him.',
            'bangla'        => 'হাঁ, যে কেউ তার অঙ্গীকার পালন করে ও ভয়-ভক্তি বজায় রেখে চলে, নিঃসন্দেহ তখন আল্লাহ্ মুত্তাকীদের ভালোবাসেন।'
        ]);

        SuraInfo::create([
            'sura_list_id'  => 3,
            'ayah_no'       => 77,
            'page_no'       => 59,
            'jaz_no'        => 3,
            'arabic'        => 'إِنَّ الَّذِينَ يَشْتَرُونَ بِعَهْدِ اللَّهِ وَأَيْمَانِهِمْ ثَمَنًا قَلِيلًا أُولَـٰئِكَ لَا خَلَاقَ لَهُمْ فِي الْآخِرَةِ وَلَا يُكَلِّمُهُمُ اللَّهُ وَلَا يَنظُرُ إِلَيْهِمْ يَوْمَ الْقِيَامَةِ وَلَا يُزَكِّيهِمْ وَلَهُمْ عَذَابٌ أَلِيمٌ',
            'english'       => 'Indeed, those who exchange the covenant of Allah and their [own] oaths for a small price will have no share in the Hereafter, and Allah will not speak to them or look at them on the Day of Resurrection, nor will He purify them; and they will have a painful punishment.',
            'bangla'        => 'নিঃসন্দেহ যারা আল্লাহ্‌র অঙ্গীকার ও তাদের প্রতি‌শ্রুতি স্বল্পমূল্যে বিক্রী করে দেয়, তারা -- পরকালে তাদের জন্য কোনো ভাগ থাকবে না, আর আল্লাহ্ তাদের সঙ্গে কথাও বলবেন না বা তাদের দিকে তাকাবেন না কিয়ামতের দিনে, আর তিনি তাদের শুদ্ধও করবেন না, আর তাদের জন্য থাকছে কঠোর যাতনা।'
        ]);
    }
}
