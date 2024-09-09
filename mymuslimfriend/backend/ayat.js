const ayat = document.getElementById('ayat')
const translate = document.getElementById('translate')
const locationSurah  = document.getElementById('location')

const ayatArray = [
    "فَلَا تَهِنُوا وَلَا تَحْزَنُوا وَأَنتُمُ الْأَعْلَوْنَ إِن كُنتُم مُّؤْمِنِينَ", // 1
    "قُلْ يَعِبَادِيَ الَّذِينَ أَسْرَفُوا عَلَىٰ أَنفُسِهِمْ لَا تَقْنَطُوا مِن رَّحْمَةِ اللَّهِ", // 2
    "وَالَّذِينَ جَاهَدُوا فِينَا لَنَهْدِيَنَّهُمْ سُبُلَنَا", // 3
    "رَبَّنَا وَلَا تَحْمِلْنَا مَا لَا طَاقَةَ لَنَا بِهِ", // 4
    "قُل لَّن يُصِيبَنَا إِلَّا مَا كَتَبَ اللَّهُ لَنَا", // 5
    "هُوَ الَّذِي جَعَلَ الْأَرْضَ ذَلُولًا فَامْشُوا فِي مَنَاكِبِهَا", // 6
    "وَالَّذِينَ جَاهَدُوا فِينَا لَنَهْدِيَنَّهُمْ سُبُلَنَا", // 7
    "مَا أَصَابَ مِن مُصِيبَةٍ فِي الْأَرْضِ وَلَا فِي أَنفُسِكُمْ إِلَّا فِي كِتَابٍ مِن قَبْلِ أَنْ نَبْرَأَهَا", // 8
    "ظَهَرَ الْفَسَادُ فِي الْبَرِّ وَالْبَحْرِ بِمَا كَسَبَتْ أَيْدِي النَّاسِ لِيُذِيقَهُمْ بَعْضَ الَّذِي عَمِلُوا لَعَلَّهُمْ يَرْجِعُونَ", // 9
    "عَسَى أَنْ تَكْرَهُوا شَيْئًا وَهُوَ خَيْرٌ لَّكُمْ", // 10
    "وَالَّذِينَ جَاهَدُوا فِينَا لَنَهْدِيَنَّهُمْ سُبُلَنَا", // 11
    "إِلَّا مَنْ تَابَ وَآمَنَ وَعَمِلَ عَمَلًا صَالِحًا فَأُو۟لَـٰٓئِكَ يُبَدِّلُ اللَّهُ سَيِّئَاتِهِمْ حَسَنَاتٍ", // 12
    "قُلْ يَا عِبَادِيَ الَّذِينَ آمَنُوا اتَّقُوا رَبَّكُمْ", // 13
    "مَثَلُ الَّذِينَ يُنْفِقُونَ أَمْوَالَهُمْ فِي سَبِيلِ اللَّهِ كَمَثَلِ حَبَّةٍ أَنبَتَتْ سَبْعَ سُبُلٍ", // 14
    "وَالَّذِينَ جَاهَدُوا فِينَا لَنَهْدِيَنَّهُمْ سُبُلَنَا", // 15
    "وَنُنَزِّلُ مِنَ الْقُرْآنِ مَا هُوَ شِفَاءٌ وَرَحْمَةٌ لِّلْمُؤْمِنِينَ", // 16
    "يَا أَيُّهَا الَّذِينَ آمَنُوا لَا يَسْخَرْ قَوْمٌ مِن قَوْمٍ عَسَىٰٓ أَنْ يَكُونُوا خَيْرًا مِّنْهُمْ", // 17
    "قُل لَّن يُصِيبَنَا إِلَّا مَا كَتَبَ اللَّهُ لَنَا", // 18
    "هُوَ الَّذِي جَعَلَ الْأَرْضَ ذَلُولًا فَامْشُوا فِي مَنَاكِبِهَا", // 19
    "وَأَعِدُّوا لَهُمْ مَّا اسْتَطَعْتُمْ مِنْ قُوَّةٍ وَمِنْ رِبَاطِ الْخَيْلِ", // 20
    "لَقَدْ أَرْسَلْنَا رُسُلَنَا بِالْبَيِّنَاتِ وَأَنزَلْنَا مَعَهُمُ الْكِتَابَ وَالْمِيزَانَ لِيَقُومَ النَّاسُ بِالْقِسْطِ", // 21
    "وَالَّذِينَ لَا يَشْهَدُونَ الزُّورَ وَإِذَا مَرُّوا بِاللَّغْوِ مَرُّوا كِرَامًا", // 22
    "يَعِدُهُمُ اللَّهُ لِلَّذِينَ آمَنُوا وَعَمِلُوا الصَّالِحَاتِ مِنْهُمْ مَغْفِرَةً وَأَجْرًا عَظِيمًا", // 23
    "رَبَّنَا وَلَا تَحْمِلْنَا مَا لَا طَاقَةَ لَنَا بِهِ", // 24
    "وَلَوْ أَنَّ أَهْلَ هَـٰذِهِ ٱلْقُرَىٰ آمَنُوا وَاتَّقَوْا لَفَتَحْنَا عَلَيْهِمْ بَرَكَاتٍ مِّنَ ٱلسَّمَاوَاتِ وَٱلْأَرْضِ", // 25
    "قُلْ يَعِبَادِيَ الَّذِينَ أَسْرَفُوا عَلَىٰ أَنفُسِهِمْ لَا تَقْنَطُوا مِن رَّحْمَةِ اللَّهِ", // 26
    "وَالَّذِينَ لَا يَشْهَدُونَ الزُّورَ وَإِذَا مَرُّوا بِاللَّغْوِ مَرُّوا كِرَامًا", // 27
    "يَهْدِي بِهِ اللَّهُ مَنْ اتَّبَعَ رِضْوَانَهُ سُبُلَ السَّلَامِ", // 28
    "وَابْتَغِ فِيمَا آتَاكَ اللَّهُ الدَّارَ الْآخِرَةَ وَلَا تَنْسَ نَصِيبَكَ مِنَ الدُّنْيَا", // 29
    "اللَّهُ نُورُ السَّمَاوَاتِ وَالْأَرْضِ" // 30
];

  
  const translateArray = [
    "So do not weaken and do not grieve, for you will be superior if you are [true] believers.", // 1
    "Say, 'O My servants who have harmed yourselves by your own selves, do not despair of the mercy of Allah.'", // 2
    "And those who strive for Us - We will surely guide them to Our ways.", // 3
    "Our Lord, and do not impose upon us a burden greater than we have strength to bear.", // 4
    "Say, 'Never will we be struck except by what Allah has decreed for us.'", // 5
    "It is He who made the earth manageable for you, so traverse its tracks.", // 6
    "And those who strive for Us - We will surely guide them to Our ways.", // 7
    "No disaster strikes upon the earth or among yourselves except that it is in a register before We bring it into being.", // 8
    "Corruption has appeared throughout the land and sea by what the people have earned.", // 9
    "Perhaps you hate something and it is good for you.", // 10
    "And those who strive for Us - We will surely guide them to Our ways.", // 11
    "Except for those who repent, believe and do righteous work. For them Allah will replace their evil deeds with good. And ever is Allah Forgiving and Merciful.", // 12
    "Say, 'O My servants who have believed, fear your Lord.'", // 13
    "The example of those who spend their wealth in the way of Allah is like a grain of corn that sprouts seven ears.", // 14
    "And those who strive for Us - We will surely guide them to Our ways.", // 15
    "And We send down in the Quran that which is healing and mercy for the believers.", // 16
    "O you who have believed, let not a people ridicule [another] people; perhaps they may be better than them.", // 17
    "Say, 'Never will we be struck except by what Allah has decreed for us.'", // 18
    "It is He who made the earth manageable for you, so traverse its tracks.", // 19
    "And prepare against them whatever you are able of power and of horses tied at the neck.", // 20
    "We have certainly sent Our messengers with clear proofs and sent down with them the Scripture and the balance that people may stand in justice.", // 21
    "And those who do not testify to falsehood, and when they pass near ill speech, they pass by with dignity.", // 22
    "Allah promises those who believe and do righteous deeds [that] for them there is forgiveness and great reward.", // 23
    "Our Lord, and do not impose upon us a burden greater than we have strength to bear.", // 24
    "If only the people of those towns had believed and feared Allah, We would have certainly opened up to them blessings from the heavens and the earth.", // 25
    "Say, 'O My servants who have harmed yourselves by your own selves, do not despair of the mercy of Allah.'", // 26
    "And those who do not testify to falsehood, and when they pass near ill speech, they pass by with dignity.", // 27
    "Allah guides with it whoever follows His pleasure to the ways of peace.", // 28
    "And seek by means of what Allah has given you the home of the Hereafter. And do not forget your share of the world.", // 29
    "Allah is the Light of the heavens and the earth." // 30
];

  
  const locationArray = [
    "Surah Al-Imran (3:139)", // 1
    "Surah Az-Zumar (39:53)", // 2
    "Surah Al-Ankabut (29:69)", // 3
    "Surah Al-Baqarah (2:286)", // 4
    "Surah At-Tawbah (9:51)", // 5
    "Surah Al-Mulk (67:15)", // 6
    "Surah Al-Ankabut (29:69)", // 7
    "Surah Al-Hadid (57:22)", // 8
    "Surah Ar-Rum (30:41)", // 9
    "Surah Al-Baqarah (2:216)", // 10
    "Surah Al-Ankabut (29:69)", // 11
    "Surah Al-Furqan (25:70)", // 12
    "Surah Az-Zumar (39:10)", // 13
    "Surah Al-Baqarah (2:261)", // 14
    "Surah Al-Ankabut (29:69)", // 15
    "Surah Al-Isra (17:82)", // 16
    "Surah Al-Hujurat (49:11)", // 17
    "Surah At-Tawbah (9:51)", // 18
    "Surah Al-Mulk (67:15)", // 19
    "Surah Al-Anfal (8:60)", // 20
    "Surah Al-Ankabut (29:69)", // 21
    "Surah Al-Furqan (25:70)", // 22
    "Surah Az-Zumar (39:10)", // 23
    "Surah Al-Baqarah (2:261)", // 24
    "Surah Al-Ankabut (29:69)", // 25
    "Surah Al-Isra (17:82)", // 26
    "Surah Al-Hujurat (49:11)", // 27
    "Surah At-Tawbah (9:51)", // 28
    "Surah Al-Mulk (67:15)", // 29
    "Surah Al-Anfal (8:60)"  // 30
  ];

  

  const randIndex = Math.floor(Math.random()*ayatArray.length)

  ayat.textContent = ayatArray[randIndex]
  locationSurah.textContent = locationArray[randIndex]
  translate.textContent = translateArray[randIndex]
  console.log(randIndex)