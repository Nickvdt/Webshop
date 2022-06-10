const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const message = document.getElementById("message");
const output = document.getElementById("result");
const image1 = document.getElementById("image1");

startRecognition = () => {
  if (SpeechRecognition !== undefined) { // test if speechrecognitio is supported
    let recognition = new SpeechRecognition();
    recognition.lang = 'nl-nl'; // which language is used?
    recognition.interimResults = false; // https://developer.mozilla.org/en-US/docs/Web/API/SpeechRecognition/interimResults
    recognition.continuous = false; // https://developer.mozilla.org/en-US/docs/Web/API/SpeechRecognition/continuous

    recognition.onstart = () => {
      message.innerHTML = `Starting listening, speak in the microphone please<br>Say "help me" for help`;
      output.classList.add("hide"); // hide the output
    };

    recognition.onspeechend = () => {
      message.innerHTML = `I stopped listening `;
      recognition.stop();
    };

    recognition.onresult = (result) => {
      let transcript = result.results[0][0].transcript;
      let confidenceTranscript = Math.floor(result.results[0][0].confidence * 100); // calc. 'confidence'
      output.classList.remove("hide"); // show the output
      output.innerHTML = `I'm ${confidenceTranscript}% certain you just said: <b>${transcript}</b>`;
      actionSpeech(transcript);
    };

    recognition.start();
  }
  else {  // speechrecognition is not supported
    message.innerHTML = "sorry speech to text is not supported in this browser";
  }
};

// process speech results
actionSpeech = (speechText) => {
  speechText = speechText.toLowerCase().trim(); // trim spaces + to lower case
  console.log(speechText); // debug 
  switch (speechText) {
    // switch evaluates using stric comparison, ===
    case "nick":
      window.open("https://www.linkedin.com/in/nick-van-der-tol-3465b0220/")
      break;
    case "reset":
      document.body.style.background = "#090721;";
      document.body.style.color = "white";
      image1.classList.add("hide"); // hide image (if any)
      break;
    // Alle Games
    case "battlefront":
      window.open("http://localhost/SWGames/webshop/game.php?id=1");
      break;
    case "battlefront 2":
      window.open("http://localhost/SWGames/webshop/game.php?id=2");
      break;
    case "battlefront 2004":
      window.open("http://localhost/SWGames/webshop/game.php?id=3");
      break;
    case "battlefront 2 2005":
      window.open("http://localhost/SWGames/webshop/game.php?id=4");
      break;
    case "Jedi Fallen Order":
      window.open("http://localhost/SWGames/webshop/game.php?id=5");
      break;
    case "Lego Star Wars":
      window.open("http://localhost/SWGames/webshop/game.php?id=6");
      break;
    case "Squadrons":
      window.open("http://localhost/SWGames/webshop/game.php?id=7");
      break;
    case "Force Unleashed":
      window.open("http://localhost/SWGames/webshop/game.php?id=8");
      break;

    case "help me":
      alert("Valid speech commands: Star Wars,  Nick, Reset, battlefront (2004), battlefront 2 (2005), Jedi Fallen Order, Lego Star Wars, Squadrons, Force Unleashed ");
      break;
    default:
    // do nothing yet
  }
}