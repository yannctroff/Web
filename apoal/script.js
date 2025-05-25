// script.js

// Lecture automatique de la musique d'intro
const introMusic = document.getElementById("music_intro");
introMusic.volume = 0.5;
introMusic.play();

// Sons
const soundBox = document.getElementById("sound_box_open");
const soundCall = document.getElementById("sound_call_banker");
const soundOffer = document.getElementById("sound_offer");

// Montants alignés avec la pyramide HTML
const amountsList = [
  0.01, 1, 5, 10, 25, 50, 75, 100, 200, 300,
  1000, 5000, 10000, 25000, 50000,
  100000, 250000, 500000, 750000, 1000000
];

let shuffledAmounts = [...amountsList].sort(() => Math.random() - 0.5);
let selectedBox = null;
let boxValues = {};

// Associer chaque boîte à une somme
const allBoxes = document.querySelectorAll(".box");
allBoxes.forEach((box, index) => {
  const boxNumber = box.dataset.number;
  boxValues[boxNumber] = shuffledAmounts[index];

  box.addEventListener("click", () => {
    if (!selectedBox) {
      // Choix de la boîte du joueur
      selectedBox = boxNumber;
      box.classList.add("selected");
      box.innerText = `🎁`;
      alert(`Vous avez choisi la boîte n°${boxNumber}`);
    } else if (!box.classList.contains("opened") && boxNumber !== selectedBox) {
      // Ouvrir une autre boîte
      box.classList.add("opened");
      box.style.backgroundColor = "#c3073f";
      box.innerText = boxValues[boxNumber].toLocaleString("fr-FR", { minimumFractionDigits: 2 }) + " €";
      soundBox.currentTime = 0;
      soundBox.play();

      // Griser le montant dans la pyramide
      const targetAmount = document.querySelector(`.amount[data-value='${boxValues[boxNumber]}']`);
      if (targetAmount) {
        targetAmount.classList.add("opened");
        targetAmount.style.opacity = "0.3";
      }
    }
  });
});

// Simulation appel banquier
function callBanker() {
  soundCall.currentTime = 0;
  soundCall.play();

  setTimeout(() => {
    soundOffer.currentTime = 0;
    soundOffer.play();
    alert("Le banquier vous propose d'échanger votre boîte !");
  }, 3000);
}
