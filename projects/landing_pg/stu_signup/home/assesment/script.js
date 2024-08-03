let currentQuestion = 1;
const totalQuestions = 10;
let totalScore = 0;

function nextQuestion() {
  const question = document.getElementById(`question${currentQuestion}`);
  const selectedOption = document.querySelector(`input[name=q${currentQuestion}]:checked`);
  
  if (!selectedOption) {
    document.getElementById('message').textContent = 'Please select an option.';
    document.getElementById('message').style.display = 'block';
    return;
  }

  document.getElementById('message').style.display = 'none';

  // Calculate score for the current question
  totalScore += parseInt(selectedOption.value);

  if (currentQuestion < totalQuestions) {
    hideQuestion(currentQuestion);
    currentQuestion++;
    showQuestion(currentQuestion);
  } else if (currentQuestion === totalQuestions) {
    showResult();
  }
}

function showQuestion(questionNumber) {
  const question = document.getElementById(`question${questionNumber}`);
  question.style.display = 'block';
  setTimeout(() => {
    question.style.opacity = '1';
  }, 50);
}

function hideQuestion(questionNumber) {
  const question = document.getElementById(`question${questionNumber}`);
  question.style.opacity = '0';
  setTimeout(() => {
    question.style.display = 'none';
  }, 500);
}

function showResult() {
  let result = '';
  if (totalScore >= 10 && totalScore <= 15) {
    result = 'low';
  } else if (totalScore >= 16 && totalScore <= 19) {
    result = 'moderate';
  } else {
    result = 'high';
  }

  // Navigate to respective result page based on the result
  switch (result) {
    case 'low':
      alert('Your stress levels appear to be low.');
      window.location.href = './mood/lonely.html';
      break;
    case 'moderate':
      alert('Your stress levels are moderate.');
      window.location.href = './mood/anxious.html';
      break;
    case 'high':
      alert('Your stress levels are high. Please seek support.');
      window.location.href = './mood/stressed.html';
      break;
    default:
      alert('Error: Unable to determine stress level.');
      break;
  }
}

document.addEventListener('DOMContentLoaded', function() {
  showQuestion(currentQuestion);
});

