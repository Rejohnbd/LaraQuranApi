<?php

use App\SuraList;
use Illuminate\Database\Seeder;

class SuraListTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      SuraList::create(["arabic_name" => "الفاتحة", "english_name" => "Al-Faatiha", "english_ayahs_count" => "verse-7", "bangla_name" => "আল-ফাতিহা", "bangla_ayahs_count" => "আয়াত-৭"]);
      SuraList::create(["arabic_name" => "البقرة", "english_name" => "Al-Baqarah", "english_ayahs_count" => "verse-286", "bangla_name" => "আল-বাক্বারাহ্", "bangla_ayahs_count" => "আয়াত-২৮৬"]);
      SuraList::create(["arabic_name" => "آل عمران", "english_name" => "Al-Imran", "english_ayahs_count" => "verse-200", "bangla_name" => "আল-ইমরান", "bangla_ayahs_count" => "আয়াত-২০০"]);
      SuraList::create(["arabic_name" => "النساء", "english_name" => "An-Nisa", "english_ayahs_count" => "verse-176", "bangla_name" => "আন-নিসা", "bangla_ayahs_count" => "আয়াত-১৭৬"]);
      SuraList::create(["arabic_name" => "المائدة", "english_name" => "Al-Ma'idah", "english_ayahs_count" => "verse-120", "bangla_name" => "আল-মায়েদাহ্", "bangla_ayahs_count" => "আয়াত-১২০"]);
      SuraList::create(["arabic_name" => "الأنعام", "english_name" => "Al-An'am", "english_ayahs_count" => "verse-165", "bangla_name" => "আল-আন‘আম", "bangla_ayahs_count" => "আয়াত-১৬৫"]);
      SuraList::create(["arabic_name" => "الأعراف", "english_name" => "Al-A'raf", "english_ayahs_count" => "verse-206", "bangla_name" => "আল-আ‘রাফ", "bangla_ayahs_count" => "আয়াত-২০৬"]);
      SuraList::create(["arabic_name" => "الأنفال", "english_name" => "Al-Anfal", "english_ayahs_count" => "verse-75", "bangla_name" => "আল-আনফাল", "bangla_ayahs_count" => "আয়াত-৭৫"]);
      SuraList::create(["arabic_name" => "التوبة", "english_name" => "At-Taubah", "english_ayahs_count" => "verse-129", "bangla_name" => "আত-তাওবাহ্", "bangla_ayahs_count" => "আয়াত-১২৯"]);
      SuraList::create(["arabic_name" => "يونس", "english_name" => "Yunus", "english_ayahs_count" => "verse-109", "bangla_name" => "ইউনুস", "bangla_ayahs_count" => "আয়াত-১০৯"]);
      SuraList::create(["arabic_name" => "هود", "english_name" => "Hood", "english_ayahs_count" => "verse-123", "bangla_name" => "হূদ", "bangla_ayahs_count" => "আয়াত-১২৩"]);
      SuraList::create(["arabic_name" => "يوسف", "english_name" => "Yusuf", "english_ayahs_count" => "verse-111", "bangla_name" => "ইউসুফ", "bangla_ayahs_count" => "আয়াত-১১১"]);
      SuraList::create(["arabic_name" => "الرعد", "english_name" => "Ar-Ra'd", "english_ayahs_count" => "verse-43", "bangla_name" => "আর-রা‘দ", "bangla_ayahs_count" => "আয়াত-৪৩"]);
      SuraList::create(["arabic_name" => "إبراهيم", "english_name" => "Ibrahim", "english_ayahs_count" => "verse-52", "bangla_name" => "ইব্রাহীম", "bangla_ayahs_count" => "আয়াত-৫২"]);
      SuraList::create(["arabic_name" => "الحجر", "english_name" => "Al-Hijr", "english_ayahs_count" => "verse-99", "bangla_name" => "আল-হিজর", "bangla_ayahs_count" => "আয়াত-৯৯"]);
      SuraList::create(["arabic_name" => "النحل", "english_name" => "An-Nahl", "english_ayahs_count" => "verse-128", "bangla_name" => "আন-নাহ্‌ল", "bangla_ayahs_count" => "আয়াত-১২৮"]);
      SuraList::create(["arabic_name" => "الإسراء", "english_name" => "Al-Isra", "english_ayahs_count" => "verse-111", "bangla_name" => "আল-ইসরা", "bangla_ayahs_count" => "আয়াত-১১১"]);
      SuraList::create(["arabic_name" => "الكهف", "english_name" => "Al-Kahf", "english_ayahs_count" => "verse-110", "bangla_name" => "আল-কাহফ", "bangla_ayahs_count" => "আয়াত-১১০"]);
      SuraList::create(["arabic_name" => "مريم", "english_name" => "Maryam", "english_ayahs_count" => "verse-98", "bangla_name" => "মারইয়াম", "bangla_ayahs_count" => "আয়াত-৯৮"]);
      SuraList::create(["arabic_name" => "طه", "english_name" => "TaHa", "english_ayahs_count" => "verse-135", "bangla_name" => "ত্বা-হা", "bangla_ayahs_count" => "আয়াত-১৩৫"]);
      SuraList::create(["arabic_name" => "الأنبياء", "english_name" => "Al-Anbiya", "english_ayahs_count" => "verse-112", "bangla_name" => "আল-আম্বিয়া", "bangla_ayahs_count" => "আয়াত-১১২"]);
      SuraList::create(["arabic_name" => "الحج", "english_name" => "Al-Hajj", "english_ayahs_count" => "verse-78", "bangla_name" => "আল-হাজ্জ", "bangla_ayahs_count" => "আয়াত-৭৮"]);
      SuraList::create(["arabic_name" => "المؤمنون", "english_name" => "Al-Mu'minun", "english_ayahs_count" => "verse-118", "bangla_name" => "আল-মু’মিনূন", "bangla_ayahs_count" => "আয়াত-১১৮"]);
      SuraList::create(["arabic_name" => "النور", "english_name" => "An-Nur", "english_ayahs_count" => "verse-64", "bangla_name" => "আন-নূর", "bangla_ayahs_count" => "আয়াত-৬৪"]);
      SuraList::create(["arabic_name" => "الفرقان", "english_name" => "Al-Furqan", "english_ayahs_count" => "verse-77", "bangla_name" => "আল-ফুরক্বান", "bangla_ayahs_count" => "আয়াত-৭৭"]);
      SuraList::create(["arabic_name" => "الشعراء", "english_name" => "Ash-Shu'ara", "english_ayahs_count" => "verse-227", "bangla_name" => "আশ-শু‘আরা", "bangla_ayahs_count" => "আয়াত-২২৭"]);
      SuraList::create(["arabic_name" => "النمل", "english_name" => "An-Naml", "english_ayahs_count" => "verse-93", "bangla_name" => "আন-নামল", "bangla_ayahs_count" => "আয়াত-৯৩"]);
      SuraList::create(["arabic_name" => "القصص", "english_name" => "Al-Qasas", "english_ayahs_count" => "verse-88", "bangla_name" => "আল-ক্বাসাস", "bangla_ayahs_count" => "আয়াত-৮৮"]);
      SuraList::create(["arabic_name" => "العنكبوت", "english_name" => "Al-Ankabut", "english_ayahs_count" => "verse-69", "bangla_name" => "আল-‘আনকাবূত", "bangla_ayahs_count" => "আয়াত-৬৯"]);
      SuraList::create(["arabic_name" => "الروم", "english_name" => "Ar-Room", "english_ayahs_count" => "verse-60", "bangla_name" => "আর-রূম", "bangla_ayahs_count" => "আয়াত-৬০"]);
      SuraList::create(["arabic_name" => "لقمان", "english_name" => "Luqman", "english_ayahs_count" => "verse-34", "bangla_name" => "লুক্বমান", "bangla_ayahs_count" => "আয়াত-৩৪"]);
      SuraList::create(["arabic_name" => "السجدة", "english_name" => "As-Sajdah", "english_ayahs_count" => "verse-30", "bangla_name" => "আস-সাজদা", "bangla_ayahs_count" => "আয়াত-৩০"]);
      SuraList::create(["arabic_name" => "الأحزاب", "english_name" => "Al-Ahzab", "english_ayahs_count" => "verse-73", "bangla_name" => "আল-আহযাব", "bangla_ayahs_count" => "আয়াত-৭৩"]);
      SuraList::create(["arabic_name" => "سبأ", "english_name" => "Saba", "english_ayahs_count" => "verse-54", "bangla_name" => "সাবা", "bangla_ayahs_count" => "আয়াত-৫৪"]);
      SuraList::create(["arabic_name" => "فاطر", "english_name" => "Fatir", "english_ayahs_count" => "verse-45", "bangla_name" => "ফাতের", "bangla_ayahs_count" => "আয়াত-৪৫"]);
      SuraList::create(["arabic_name" => "يس", "english_name" => "Yaseen", "english_ayahs_count" => "verse-83", "bangla_name" => "ইয়াসীন", "bangla_ayahs_count" => "আয়াত-৮৩"]);
      SuraList::create(["arabic_name" => "الصافات", "english_name" => "As-Saffat", "english_ayahs_count" => "verse-182", "bangla_name" => "আস-সাফ্‌ফাত", "bangla_ayahs_count" => "আয়াত-১৮২"]);
      SuraList::create(["arabic_name" => "سُورَةُ صٓ", "english_name" => "Saad", "english_ayahs_count" => "verse-88", "bangla_name" => "সদ", "bangla_ayahs_count" => "আয়াত-৮৮"]);
      SuraList::create(["arabic_name" => "الزمر", "english_name" => "Az-Zumar", "english_ayahs_count" => "verse-75", "bangla_name" => "আয-যুমার", "bangla_ayahs_count" => "আয়াত-৭৫"]);
      SuraList::create(["arabic_name" => "غافر", "english_name" => "Ghafir", "english_ayahs_count" => "verse-85", "bangla_name" => "গাফের", "bangla_ayahs_count" => "আয়াত-৮৫"]);
      SuraList::create(["arabic_name" => "فصلت", "english_name" => "Fussilat", "english_ayahs_count" => "verse-54", "bangla_name" => "ফুসসিলাত", "bangla_ayahs_count" => "আয়াত-54"]);
      SuraList::create(["arabic_name" => "الشورى", "english_name" => "Ash-Shura", "english_ayahs_count" => "verse-53", "bangla_name" => "আশ-শূরা", "bangla_ayahs_count" => "আয়াত-৫৩"]);
      SuraList::create(["arabic_name" => "الزخرف", "english_name" => "Az-Zukhruf", "english_ayahs_count" => "verse-89", "bangla_name" => "আয-যুখরুফ", "bangla_ayahs_count" => "আয়াত-৮৯"]);
      SuraList::create(["arabic_name" => "الدّخان", "english_name" => "Ad-Dukhan", "english_ayahs_count" => "verse-59", "bangla_name" => "আদ-দুখান", "bangla_ayahs_count" => "আয়াত-৫৯"]);
      SuraList::create(["arabic_name" => "الجاثية", "english_name" => "Al-Jathiya", "english_ayahs_count" => "verse-37", "bangla_name" => "আল-জাসিয়া", "bangla_ayahs_count" => "আয়াত-৩৭"]);
      SuraList::create(["arabic_name" => "الأحقاف", "english_name" => "Al-Ahqaf", "english_ayahs_count" => "verse-35", "bangla_name" => "আল-আহক্বাফ", "bangla_ayahs_count" => "আয়াত-৭"]);
      SuraList::create(["arabic_name" => "محمد", "english_name" => "Muhammad", "english_ayahs_count" => "verse-38", "bangla_name" => "মুহাম্মাদ", "bangla_ayahs_count" => "আয়াত-৩৮"]);
      SuraList::create(["arabic_name" => "الفتح", "english_name" => "Al-Fath", "english_ayahs_count" => "verse-29", "bangla_name" => "আল-ফাতহ", "bangla_ayahs_count" => "আয়াত-২৯"]);
      SuraList::create(["arabic_name" => "الحجرات", "english_name" => "Al-Hujurat", "english_ayahs_count" => "verse-18", "bangla_name" => "আল-হুজুরাত", "bangla_ayahs_count" => "আয়াত-১৮"]);
      SuraList::create(["arabic_name" => "ق", "english_name" => "Qaf", "english_ayahs_count" => "verse-45", "bangla_name" => "ক্বাফ", "bangla_ayahs_count" => "আয়াত-৪৫"]);
      SuraList::create(["arabic_name" => "الذاريات", "english_name" => "Az-Zariyat", "english_ayahs_count" => "verse-60", "bangla_name" => "আয-যারিয়াত", "bangla_ayahs_count" => "আয়াত-৬০"]);
      SuraList::create(["arabic_name" => "الطور", "english_name" => "At-Tur", "english_ayahs_count" => "verse-49", "bangla_name" => "আত-তূর", "bangla_ayahs_count" => "আয়াত-৪৯"]);
      SuraList::create(["arabic_name" => "النجم", "english_name" => "An-Najm", "english_ayahs_count" => "verse-62", "bangla_name" => "আন-নাজম", "bangla_ayahs_count" => "আয়াত-৬২"]);
      SuraList::create(["arabic_name" => "القمر", "english_name" => "Al-Qamar", "english_ayahs_count" => "verse-55", "bangla_name" => "আল-ক্বামার", "bangla_ayahs_count" => "আয়াত-৫৫"]);
      SuraList::create(["arabic_name" => "الرحمن", "english_name" => "Ar-Rahman", "english_ayahs_count" => "verse-78", "bangla_name" => "আর-রাহমান", "bangla_ayahs_count" => "আয়াত-৭৮"]);
      SuraList::create(["arabic_name" => "الواقعة", "english_name" => "Al-Waqi'ah", "english_ayahs_count" => "verse-96", "bangla_name" => "আল-ওয়াক্বি‘আহ", "bangla_ayahs_count" => "আয়াত-৭"]);
      SuraList::create(["arabic_name" => "الحديد", "english_name" => "Al-Hadid", "english_ayahs_count" => "verse-29", "bangla_name" => "আল-হাদীদ", "bangla_ayahs_count" => "আয়াত-২৯"]);
      SuraList::create(["arabic_name" => "المجادلة", "english_name" => "Al-Mujadilah", "english_ayahs_count" => "verse-22", "bangla_name" => "আল-মুজাদালাহ্", "bangla_ayahs_count" => "আয়াত-২২"]);
      SuraList::create(["arabic_name" => "الحشر", "english_name" => "Al-Hashr", "english_ayahs_count" => "verse-24", "bangla_name" => "আল-হাশর", "bangla_ayahs_count" => "আয়াত-২৪"]);
      SuraList::create(["arabic_name" => "الممتحنة", "english_name" => "Al-Mumtahinah", "english_ayahs_count" => "verse-13", "bangla_name" => "আল-মুমতাহিনা", "bangla_ayahs_count" => "আয়াত-১৩"]);
      SuraList::create(["arabic_name" => "الصف", "english_name" => "As-Saff", "english_ayahs_count" => "verse-14", "bangla_name" => "আস-সাফ", "bangla_ayahs_count" => "আয়াত-১৪"]);
      SuraList::create(["arabic_name" => "الجمعة", "english_name" => "Al-Jumu'ah", "english_ayahs_count" => "verse-11", "bangla_name" => "আল-জুমু‘আ", "bangla_ayahs_count" => "আয়াত-১১"]);
      SuraList::create(["arabic_name" => "المنافقون", "english_name" => "Al-Munafiqun", "english_ayahs_count" => "verse-11", "bangla_name" => "আল-মুনাফিক্বূন", "bangla_ayahs_count" => "আয়াত-১১"]);
      SuraList::create(["arabic_name" => "التغابن", "english_name" => "At-Taghabun", "english_ayahs_count" => "verse-18", "bangla_name" => "আত-তাগাবুন", "bangla_ayahs_count" => "আয়াত-১৮"]);
      SuraList::create(["arabic_name" => "الطلاق", "english_name" => "At-Talaq", "english_ayahs_count" => "verse-12", "bangla_name" => "আত-ত্বালাক", "bangla_ayahs_count" => "আয়াত-১২"]);
      SuraList::create(["arabic_name" => "التحريم", "english_name" => "At-Tahrim", "english_ayahs_count" => "verse-12", "bangla_name" => "আত-তাহরীম", "bangla_ayahs_count" => "আয়াত-১২"]);
      SuraList::create(["arabic_name" => "الملك", "english_name" => "Al-Mulk", "english_ayahs_count" => "verse-30", "bangla_name" => "আল-মুলক", "bangla_ayahs_count" => "আয়াত-৩০"]);
      SuraList::create(["arabic_name" => "القلم", "english_name" => "Al-Qalam", "english_ayahs_count" => "verse-52", "bangla_name" => "আল-ক্বালাম", "bangla_ayahs_count" => "আয়াত-৫২"]);
      SuraList::create(["arabic_name" => "الحاقة", "english_name" => "Al-Haqqah", "english_ayahs_count" => "verse-52", "bangla_name" => "আল-হাক্কাহ্", "bangla_ayahs_count" => "আয়াত-৫২"]);
      SuraList::create(["arabic_name" => "المعارج", "english_name" => "Al-Ma'arij", "english_ayahs_count" => "verse-44", "bangla_name" => "আল-মা‘আরেজ", "bangla_ayahs_count" => "আয়াত-৪৪"]);
      SuraList::create(["arabic_name" => "نوح", "english_name" => "Nooh", "english_ayahs_count" => "verse-28", "bangla_name" => "নূহ", "bangla_ayahs_count" => "আয়াত-২৮"]);
      SuraList::create(["arabic_name" => "الجن", "english_name" => "Al-Jinn", "english_ayahs_count" => "verse-28", "bangla_name" => "আল-জিন্ন", "bangla_ayahs_count" => "আয়াত-২৮"]);
      SuraList::create(["arabic_name" => "المزمل", "english_name" => "Al-Muzzammil", "english_ayahs_count" => "verse-20", "bangla_name" => "আল-মুযযাম্মিল", "bangla_ayahs_count" => "আয়াত-২০"]);
      SuraList::create(["arabic_name" => "المدثر", "english_name" => "Al-Muddaththir", "english_ayahs_count" => "verse-56", "bangla_name" => "আল-মুদ্দাস্‌সির", "bangla_ayahs_count" => "আয়াত-৫৬"]);
      SuraList::create(["arabic_name" => "القيامة", "english_name" => "Al-Qiyamah", "english_ayahs_count" => "verse-40", "bangla_name" => "আল-ক্বিয়ামাহ্‌", "bangla_ayahs_count" => "আয়াত-৪০"]);
      SuraList::create(["arabic_name" => "الإنسان", "english_name" => "Al-Insan", "english_ayahs_count" => "verse-31", "bangla_name" => "আল-ইনসান", "bangla_ayahs_count" => "আয়াত-৩১"]);
      SuraList::create(["arabic_name" => "المرسلات", "english_name" => "Al-Mursalat", "english_ayahs_count" => "verse-50", "bangla_name" => "আল-মুরসালাত", "bangla_ayahs_count" => "আয়াত-৫০"]);
      SuraList::create(["arabic_name" => "النبأ", "english_name" => "An-Naba", "english_ayahs_count" => "verse-40", "bangla_name" => "আন-নাবা", "bangla_ayahs_count" => "আয়াত-৪০"]);
      SuraList::create(["arabic_name" => "النازعات", "english_name" => "An-Nazi'at", "english_ayahs_count" => "verse-46", "bangla_name" => "আন-নাযি‘আত", "bangla_ayahs_count" => "আয়াত-৪৬"]);
      SuraList::create(["arabic_name" => "عبس", "english_name" => "Abasa", "english_ayahs_count" => "verse-42", "bangla_name" => "আবাসা", "bangla_ayahs_count" => "আয়াত-৪২"]);
      SuraList::create(["arabic_name" => "التكوير", "english_name" => "At-Takwir", "english_ayahs_count" => "verse-29", "bangla_name" => "আত-তাকভীর", "bangla_ayahs_count" => "আয়াত-২৯"]);
      SuraList::create(["arabic_name" => "الإنفطار", "english_name" => "Al-Infitar", "english_ayahs_count" => "verse-19", "bangla_name" => "আল-ইনফিতার", "bangla_ayahs_count" => "আয়াত-১৯"]);
      SuraList::create(["arabic_name" => "المطففين", "english_name" => "Al-Mutaffifin", "english_ayahs_count" => "verse-36", "bangla_name" => "আল-মুতাফফিফীন", "bangla_ayahs_count" => "আয়াত-৩৬"]);
      SuraList::create(["arabic_name" => "الإنشقاق", "english_name" => "Al-Inshiqaq", "english_ayahs_count" => "verse-25", "bangla_name" => "আল-ইনশিক্বাক", "bangla_ayahs_count" => "আয়াত-৭"]);
      SuraList::create(["arabic_name" => "البروج", "english_name" => "Al-Buruj", "english_ayahs_count" => "verse-22", "bangla_name" => "আল-বুরূজ", "bangla_ayahs_count" => "আয়াত-২২"]);
      SuraList::create(["arabic_name" => "الطارق", "english_name" => "At-Tariq", "english_ayahs_count" => "verse-17", "bangla_name" => "আত-ত্বারেক", "bangla_ayahs_count" => "আয়াত-১৭"]);
      SuraList::create(["arabic_name" => "الأعلى", "english_name" => "Al-A'la", "english_ayahs_count" => "verse-19", "bangla_name" => "আল-আ‘লা", "bangla_ayahs_count" => "আয়াত-১৯"]);
      SuraList::create(["arabic_name" => "الغاشية", "english_name" => "Al-Ghashiyah", "english_ayahs_count" => "verse-26", "bangla_name" => "আল-গাশিয়াহ্", "bangla_ayahs_count" => "আয়াত-২৬"]);
      SuraList::create(["arabic_name" => "الفجر", "english_name" => "Al-Fajr", "english_ayahs_count" => "verse-30", "bangla_name" => "আল-ফাজর", "bangla_ayahs_count" => "আয়াত-৩০"]);
      SuraList::create(["arabic_name" => "البلد", "english_name" => "Al-Balad", "english_ayahs_count" => "verse-20", "bangla_name" => "আল-বালাদ", "bangla_ayahs_count" => "আয়াত-২০"]);
      SuraList::create(["arabic_name" => "الشمس", "english_name" => "Ash-Shams", "english_ayahs_count" => "verse-15", "bangla_name" => "আশ-শামস", "bangla_ayahs_count" => "আয়াত-১৫"]);
      SuraList::create(["arabic_name" => "الليل", "english_name" => "Al-Lail", "english_ayahs_count" => "verse-21", "bangla_name" => "আল-লাইল", "bangla_ayahs_count" => "আয়াত-২১"]);
      SuraList::create(["arabic_name" => "الضحى", "english_name" => "Ad-Duha", "english_ayahs_count" => "verse-11", "bangla_name" => "আদ্ব-দ্বুহা", "bangla_ayahs_count" => "আয়াত-১১"]);
      SuraList::create(["arabic_name" => "الشرح", "english_name" => "Ash-Sharh", "english_ayahs_count" => "verse-8", "bangla_name" => "আশ-শারহ", "bangla_ayahs_count" => "আয়াত-৮"]);
      SuraList::create(["arabic_name" => "التين", "english_name" => "At-Tin", "english_ayahs_count" => "verse-8", "bangla_name" => "আত-তীন", "bangla_ayahs_count" => "আয়াত-৮"]);
      SuraList::create(["arabic_name" => "العلق", "english_name" => "Al-Alaq", "english_ayahs_count" => "verse-19", "bangla_name" => "আল-আলাক্ব", "bangla_ayahs_count" => "আয়াত-১৯"]);
      SuraList::create(["arabic_name" => "القدر", "english_name" => "Al-Baiyinah", "english_ayahs_count" => "verse-5", "bangla_name" => "আল-ক্বাদর", "bangla_ayahs_count" => "আয়াত-৫"]);
      SuraList::create(["arabic_name" => "البينة", "english_name" => "Al-Baqarah", "english_ayahs_count" => "verse-8", "bangla_name" => "আল-বায়্যিনাহ্", "bangla_ayahs_count" => "আয়াত-৮"]);
      SuraList::create(["arabic_name" => "الزلزلة", "english_name" => "Az-Zalzalah", "english_ayahs_count" => "verse-8", "bangla_name" => "আয-যালযালাহ্", "bangla_ayahs_count" => "আয়াত-৮"]);
      SuraList::create(["arabic_name" => "العاديات", "english_name" => "Al-Adiyat", "english_ayahs_count" => "verse-11", "bangla_name" => "আল-আদিয়াত", "bangla_ayahs_count" => "আয়াত-১১"]);
      SuraList::create(["arabic_name" => "القارعة", "english_name" => "Al-Qari'ah", "english_ayahs_count" => "verse-11", "bangla_name" => "আল-ক্বারি‘আহ্", "bangla_ayahs_count" => "আয়াত-১১"]);
      SuraList::create(["arabic_name" => "التكاثر", "english_name" => "At-Takathur", "english_ayahs_count" => "verse-8", "bangla_name" => "আত-তাকাসুর", "bangla_ayahs_count" => "আয়াত-৮"]);
      SuraList::create(["arabic_name" => "العصر", "english_name" => "Al-Asr", "english_ayahs_count" => "verse-3", "bangla_name" => "আল-আসর", "bangla_ayahs_count" => "আয়াত-৩"]);
      SuraList::create(["arabic_name" => "الهمزة", "english_name" => "Al-Humazah", "english_ayahs_count" => "verse-9", "bangla_name" => "আল-হুমাযাহ্", "bangla_ayahs_count" => "আয়াত-৯"]);
      SuraList::create(["arabic_name" => "الفيل", "english_name" => "Al-Fil", "english_ayahs_count" => "verse-5", "bangla_name" => "আল-ফীল", "bangla_ayahs_count" => "আয়াত-৫"]);
      SuraList::create(["arabic_name" => "قريش", "english_name" => "Quraish", "english_ayahs_count" => "verse-4", "bangla_name" => "ক্বুরাইশ", "bangla_ayahs_count" => "আয়াত-৪"]);
      SuraList::create(["arabic_name" => "الماعون", "english_name" => "Al-Ma'un", "english_ayahs_count" => "verse-7", "bangla_name" => "আল-মা‘ঊন", "bangla_ayahs_count" => "আয়াত-৭"]);
      SuraList::create(["arabic_name" => "الكوثر", "english_name" => "Al-Kauthar", "english_ayahs_count" => "verse-3", "bangla_name" => "আল-কাউসার", "bangla_ayahs_count" => "আয়াত-৩"]);
      SuraList::create(["arabic_name" => "الكافرون", "english_name" => "Al-Kafirun", "english_ayahs_count" => "verse-6", "bangla_name" => "আল-কাফিরূন", "bangla_ayahs_count" => "আয়াত-৬"]);
      SuraList::create(["arabic_name" => "النصر", "english_name" => "An-Nasr", "english_ayahs_count" => "verse-3", "bangla_name" => "আন-নাসর", "bangla_ayahs_count" => "আয়াত-৩"]);
      SuraList::create(["arabic_name" => "المسد", "english_name" => "Al-Masad", "english_ayahs_count" => "verse-5", "bangla_name" => "আল-মাসাদ", "bangla_ayahs_count" => "আয়াত-৫"]);
      SuraList::create(["arabic_name" => "الإخلاص", "english_name" => "Al-Ikhlas", "english_ayahs_count" => "verse-4", "bangla_name" => "আল-ইখলাস", "bangla_ayahs_count" => "আয়াত-৪"]);
      SuraList::create(["arabic_name" => "الفلق", "english_name" => "Al-Falaq", "english_ayahs_count" => "verse-5", "bangla_name" => "আল-ফালাক্ব", "bangla_ayahs_count" => "আয়াত-৫"]);
      SuraList::create(["arabic_name" => "الناس", "english_name" => "An-Nas", "english_ayahs_count" => "verse-6", "bangla_name" => "আন-নাস", "bangla_ayahs_count" => "আয়াত-৬"]);
   }
}
