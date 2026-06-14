<!-- Шапка раздела Тесты -->
<section class="section-hero-tests" id="test-intro-section">
  <div class="container reveal visible">
    <span class="badge">Проверьте себя</span>
    <h1 class="hero-title">Готовность к профессии: Психолог</h1>
    <p class="hero-description" style="max-width: 800px; margin: 20px auto 0; font-size: 18px; color: #6e6e73; line-height: 1.5;">
      Приглашаем вас принять участие в исследовании, которое поможет понять, насколько профессия психолога является для вас подходящей. Вам предстоит ответить на 12 вопросов о ваших интересах, взглядах и особенностях характера. Здесь нет правильных или неправильных ответов – важны искренние реакции.
    </p>
    <button onclick="startDiagnosticTest()" class="btn-apple-primary" style="margin-top: 30px; cursor: pointer;">Начать исследование</button>
  </div>
</section>

<!-- Основной блок теста (Изначально скрыт, появляется по кнопке) -->
<section class="main-test-section" id="test-execution-section" style="display: none; padding: 40px 0;">
  <div class="container">
    <div class="main-test-card" style="display: block; min-height: auto; padding: 40px;">

      <!-- Прогресс-бар -->
      <div style="width: 100%; background: #e5e5ea; height: 6px; border-radius: 3px; margin-bottom: 30px; overflow: hidden;">
        <div id="test-progress" style="width: 8.33%; background: var(--apple-blue); height: 100%; transition: width 0.3s ease;"></div>
      </div>

      <!-- Контейнер вопроса -->
      <div id="question-container" class="reveal visible">
        <span class="test-duration" id="question-number">Вопрос 1 из 12</span>
        <h2 class="test-card-title" id="question-text" style="font-size: 28px; margin-bottom: 30px; line-height: 1.3;">Текст вопроса</h2>

        <!-- Варианты ответов в стиле Apple Форм -->
        <div class="options-vertical-list" style="display: flex; flex-direction: column; gap: 12px;">
          <button onclick="selectOption(1)" class="option-btn" style="text-align: left; background: var(--apple-white); border: 1px solid #d2d2d7; padding: 16px 20px; border-radius: 12px; font-size: 16px; cursor: pointer; transition: all 0.2s ease;">Полностью не согласен</button>
          <button onclick="selectOption(2)" class="option-btn" style="text-align: left; background: var(--apple-white); border: 1px solid #d2d2d7; padding: 16px 20px; border-radius: 12px; font-size: 16px; cursor: pointer; transition: all 0.2s ease;">Скорее не согласен</button>
          <button onclick="selectOption(3)" class="option-btn" style="text-align: left; background: var(--apple-white); border: 1px solid #d2d2d7; padding: 16px 20px; border-radius: 12px; font-size: 16px; cursor: pointer; transition: all 0.2s ease;">Нечто среднее</button>
          <button onclick="selectOption(4)" class="option-btn" style="text-align: left; background: var(--apple-white); border: 1px solid #d2d2d7; padding: 16px 20px; border-radius: 12px; font-size: 16px; cursor: pointer; transition: all 0.2s ease;">Скорее согласен</button>
          <button onclick="selectOption(5)" class="option-btn" style="text-align: left; background: var(--apple-white); border: 1px solid #d2d2d7; padding: 16px 20px; border-radius: 12px; font-size: 16px; cursor: pointer; transition: all 0.2s ease;">Полностью согласен</button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Секция результатов (Изначально скрыта) -->
<section class="main-test-section" id="test-results-section" style="display: none; padding: 40px 0;">
  <div class="container">
    <div class="main-test-card" style="display: block; padding: 50px;">
      <span class="badge" style="margin-left: 0;">Ваш профиль готов</span>
      <h2 class="test-card-title" style="font-size: 36px; margin-bottom: 40px;">Результаты диагностики</h2>

      <div class="bento-grid" style="margin-top: 0; margin-bottom: 40px;">
        <!-- Результат Шкалы 1 -->
        <div class="bento-item" style="height: auto; min-height: 250px; background: #fff; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 10px 20px rgba(0,0,0,0.02);">
          <span class="item-category">Шкала 1</span>
          <h4 style="font-size: 22px; margin-top: 5px;">Интерес к научной психологии</h4>
          <div style="display: flex; align-items: baseline; gap: 10px; margin: 15px 0;">
            <span class="stat-number" id="score-science" style="font-size: 48px;">0</span>
            <span style="color: #86868b; font-size: 18px;">/ 30 баллов</span>
          </div>
          <p style="font-weight: 600; color: var(--apple-blue);" id="level-science">Определение уровня...</p>
        </div>

        <!-- Результат Шкалы 2 -->
        <div class="bento-item" style="height: auto; min-height: 250px; background: #fff; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 10px 20px rgba(0,0,0,0.02);">
          <span class="item-category">Шкала 2</span>
          <h4 style="font-size: 22px; margin-top: 5px;">Эмоциональная стабильность</h4>
          <div style="display: flex; align-items: baseline; gap: 10px; margin: 15px 0;">
            <span class="stat-number" id="score-stability" style="font-size: 48px;">0</span>
            <span style="color: #86868b; font-size: 18px;">/ 30 баллов</span>
          </div>
          <p style="font-weight: 600; color: var(--apple-blue);" id="level-stability">Определение уровня...</p>
        </div>
      </div>

      <!-- Развернутые интерпретации -->
      <div style="display: flex; flex-direction: column; gap: 30px; margin-bottom: 40px;">
        <div class="glass-card" style="text-align: left; padding: 35px;">
          <h3 style="font-size: 20px; margin-bottom: 15px; font-weight: 600;">Научный интерес</h3>
          <p id="text-science" style="font-size: 16px; color: #424245; line-height: 1.6;"></p>
        </div>
        <div class="glass-card" style="text-align: left; padding: 35px;">
          <h3 style="font-size: 20px; margin-bottom: 15px; font-weight: 600;">Эмоциональная устойчивость</h3>
          <p id="text-stability" style="font-size: 16px; color: #424245; line-height: 1.6;"></p>
        </div>
      </div>

      <!-- Агитационный блок УдГУ -->
      <div class="glass-card" style="background: linear-gradient(135deg, #f5f5f7 0%, #e8f4fd 100%); border: 1px solid rgba(0,113,227,0.1);">
        <h3 style="font-size: 26px; margin-bottom: 15px; font-weight: 600;">Сделайте шаг к будущему в УдГУ</h3>
        <p style="max-width: 700px; margin: 0 auto 25px; color: #515154; font-size: 16px; line-height: 1.5;">
          На Кафедре общей психологии УдГУ мы развиваем как глубокий интерес к научным исследованиям, так и учим сохранять профессиональное самообладание в сложных ситуациях. Станьте частью сильного профессионального сообщества!
        </p>
        <a href="?page=about" class="btn-apple-primary" style="margin-top: 0;">Узнать больше о кафедре</a>
      </div>

    </div>
  </div>
</section>

<!-- Логика обработки теста на JS -->
<script>
  const questions = [
    { id: 1, text: "Я готов(а) изучать сложные психологические теории", scale: "science" },
    { id: 2, text: "Я могу сохранять спокойствие, когда рядом кто-то злится или плачет", scale: "stability" },
    { id: 3, text: "Если человек бурно выражает свои эмоции, я не теряю самообладания", scale: "stability" },
    { id: 4, text: "Даже если психологическая теория очень сложная, я готов(а) в ней разбираться", scale: "science" },
    { id: 5, text: "Я понимаю, что психология требует серьезного изучения, и готов(а) к этому", scale: "science" },
    { id: 6, text: "После разговора с расстроенным человеком я быстро прихожу в себя", scale: "stability" },
    { id: 7, text: "Мне бы хотелось принять участие в психологическом исследовании", scale: "science" },
    { id: 8, text: "После тяжелого разговора я могу вернуться к своим обычным делам", scale: "stability" },
    { id: 9, text: "Я могу спокойно обсуждать темы, которые большинство людей стараются избегать (например, потерю, болезнь, страх)", scale: "stability" },
    { id: 10, text: "Мне было бы интересно узнать, как проводятся научные эксперименты в психологии", scale: "science" },
    { id: 11, text: "Я бы хотел разбираться в причинах поступков людей на основе научных данных, а не просто житейской логики", scale: "science" },
    { id: 12, text: "Когда я испытываю к человеку сочувствие, я не теряю способность ясно мыслить", scale: "stability" }
  ];

  const interpretations = {
    science: {
      low: "Результат говорит о том, что теоретическая, исследовательская сторона психологии, скорее всего, не входит в зону Ваших актуальных интересов. Можно предположить, что сложные научные построения в этой области не вызывают у Вас выраженного отклика, а потребность в систематическом изучении психологических концепций не ощущается как насущная. Вполне вероятно, что при объяснении поступков людей Вы склонны опираться преимущественно на собственный опыт и житейские наблюдения, а не на научные данные. Идеи, связанные с участием в психологических экспериментах или детальным знакомством с тем, как устроены такие исследования, по-видимому, на данный момент не представляются Вам привлекательными или значимыми.",
      mid: "Результат указывает на умеренный, избирательный интерес к научной психологии. Вы можете проявлять любопытство к того, как строятся теоретические модели и организуются экспериментальные исследования, однако глубокое и регулярное погружение в сложный материал, требующий значительных интеллектуальных усилий, вряд ли является для Вас приоритетом. Вероятно, Вы допускаете, что научные данные могут быть полезны для понимания поведения людей, но при этом не всегда отдаёте им предпочтение перед более привычными житейскими объяснениями. Участие в психологических исследованиях или детальное изучение методологии может вызывать у Вас ситуативный интерес, но не превращается в устойчивое стремление.",
      high: "Результат свидетельствует о выраженном познавательном интересе именно к научному фундаменту психологии. Вы, по всей видимости, положительно воспринимаете перспективу освоения сложных концепций и теорий, осознавая, что психологическое знание требует серьезного и вдумчивого изучения. Для Вас может быть важно не просто интуитивно понимать причины человеческих поступков, но и находить им объяснение, подкреплённое научными данными. Можно предположить, что Вы проявляете заметный интерес к тому, как устроены психологические эксперименты, а возможно, у Вас есть и желание непосредственно принять участие в исследовательской деятельности, чтобы ближе познакомиться с научным процессом изнутри."
    },
    stability: {
      low: "Ваш результат свидетельствует о том, что эмоционально насыщенные ситуации, особенно когда окружающие ярко выражают свои чувства, могут оказывать на Вас ощутимое воздействие и заметно влиять на самообладание. После разговоров, связанных с сильными переживаниями собеседника, Вам, вероятно, требуется определённое время на то, чтобы прийти в себя и вернуться к привычному ритму повседневных занятий. Темы, затрагивающие потерю, болезнь или глубокий страх, могут обсуждаться с внутренним напряжением и восприниматься как достаточно энергозатратные. Кроме того, когда Вы испытываете сочувствие к другому человеку, способность мыслить ясно и сохранять объективность в этот момент может временно снижаться.",
      mid: "Ваш результат свидетельствует о том, что во многих случаях эмоционально заряженной обстановки Вам удаётся сохранять относительную устойчивость, хотя это может требовать от Вас определённых усилий и не всегда происходит автоматически. После трудных, эмоционально напряжённых разговоров Вы, как правило, способны восстановиться в течение некоторого времени, но скорость возвращения к обычным делам может варьироваться в зависимости от ситуации и степени Вашей вовлечённости. К обсуждению тем, которые многие люди стараются обходить стороной, Вы подходите скорее избирательно. Способность ясно мыслить при сопереживании тоже может быть непостоянной.",
      high: "Ваш результат свидетельствует о выраженной способности сохранять эмоциональную устойчивость в самых разных, в том числе напряжённых, межличностных ситуациях. По всей видимости, Вы умеете оставаться спокойным даже тогда, когда рядом кто-то бурно проявляет свои эмоции — будь то гнев, горе или острая тревога. После тяжёлых разговоров Вы достаточно быстро восстанавливаете внутреннее равновесие. Обсуждение сложных, часто избегаемых тем не вызывает у Вас продолжительного дискомфорта. Кроме того, испытывая сочувствие к другому человеку, Вы способны не утрачивать способности к ясному и рациональному мышлению."
    }
  };

  let currentQuestionIndex = 0;
  let scores = { science: 0, stability: 0 };

  function startDiagnosticTest() {
    document.getElementById('test-intro-section').style.display = 'none';
    document.getElementById('test-execution-section').style.display = 'block';
    showQuestion();
  }

  function showQuestion() {
    const q = questions[currentQuestionIndex];
    document.getElementById('question-number').innerText = `Вопрос ${currentQuestionIndex + 1} из 12`;
    document.getElementById('question-text').innerText = q.text;
    document.getElementById('test-progress').style.width = `${((currentQuestionIndex + 1) / 12) * 100}%`;

    // Эффект плавного переключения
    const container = document.getElementById('question-container');
    container.style.opacity = 0;
    setTimeout(() => { container.style.opacity = 1; }, 50);
  }

  function selectOption(points) {
    const q = questions[currentQuestionIndex];
    scores[q.scale] += points;

    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
      showQuestion();
    } else {
      calculateAndShowResults();
    }
  }

  function getLevelKey(score) {
    if (score >= 6 && score <= 13) return 'low';
    if (score >= 14 && score <= 22) return 'mid';
    return 'high';
  }

  function getLevelTextText(key) {
    if (key === 'low') return 'Низкий уровень';
    if (key === 'mid') return 'Средний уровень';
    return 'Высокий уровень';
  }

  function calculateAndShowResults() {
    document.getElementById('test-execution-section').style.display = 'none';
    document.getElementById('test-results-section').style.display = 'block';

    // Вывод баллов
    document.getElementById('score-science').innerText = scores.science;
    document.getElementById('score-stability').innerText = scores.stability;

    // Определение уровней
    const scienceLevel = getLevelKey(scores.science);
    const stabilityLevel = getLevelKey(scores.stability);

    document.getElementById('level-science').innerText = getLevelTextText(scienceLevel);
    document.getElementById('level-stability').innerText = getLevelTextText(stabilityLevel);

    // Вывод текстов
    document.getElementById('text-science').innerText = interpretations.science[scienceLevel];
    document.getElementById('text-stability').innerText = interpretations.stability[stabilityLevel];

    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

<style>
  /* Стили интерактивных кнопок-ответов */
  .option-btn:hover {
    border-color: var(--apple-blue) !important;
    background-color: #f5f5f7 !important;
    transform: translateX(4px);
  }

  .option-btn:active {
    background-color: #e8f4fd !important;
  }

  #question-container {
    transition: opacity 0.2s ease-in-out;
  }
</style>