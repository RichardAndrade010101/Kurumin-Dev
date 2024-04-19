document.addEventListener('DOMContentLoaded', function() {
    displayQuestion(); // Exibe a primeira questão assim que a página é carregada
  });
  
  const questions = [
    { braille: '⠝', answer: 'a' }, // Questão 1: Braille '⠝', resposta 'a'
    { braille: '⠇', answer: 'b' }, // Questão 2: Braille '⠇', resposta 'b'
    { braille: '⠷', answer: 'c' }, // Questão 3: Braille '⠷', resposta 'c'
    { braille: '⠍', answer: 'd' }, // Questão 4: Braille '⠍', resposta 'd'
  ];
  
  let currentQuestion = 0;
  
  function displayQuestion() {
    const questionElement = document.getElementById('question');
    const optionsElement = document.getElementById('options');
    const resultElement = document.getElementById('result'); // Adicionando a referência ao elemento de resultado
    const current = questions[currentQuestion];
  
    questionElement.textContent = `Qual letra ou número é representado por este caractere Braille? ${current.braille}`;
    resultElement.textContent = ''; // Limpa o resultado da questão anterior
  
    optionsElement.innerHTML = `
      <input type="text" id="answerInput" placeholder="Insira sua resposta">
      <button onclick="checkAnswer()">Verificar</button>
    `;
  }
  
  function checkAnswer() {
    const answerInput = document.getElementById('answerInput');
    const resultElement = document.getElementById('result');
    const current = questions[currentQuestion];
  
    const userAnswer = answerInput.value.toLowerCase();
  
    if (userAnswer === current.answer) { // Verifica se a resposta do usuário está correta
      resultElement.textContent = 'Correto! Parabéns!';
    } else {
      resultElement.textContent = 'Incorreto. Tente novamente.';
    }
  }
  
  function nextQuestion() {
    currentQuestion++;
    if (currentQuestion >= questions.length) {
      currentQuestion = 0;
    }
    displayQuestion();
  }
  