/**
 * hours
 */
const morningOpenHourHTML = document.getElementById("morningOpen");
const morningCloseHourHTML= document.getElementById("morningClose");
const eveningOpenHourHTML = document.getElementById("eveningOpen");
const eveningCloseHourHTML = document.getElementById("eveningClose");
const morningOpenHourInput = morningOpenHourHTML.innerHTML;
const morningCloseHourInput = morningCloseHourHTML.innerHTML;
const eveningOpenHourInput = eveningOpenHourHTML.innerHTML;
const eveningCloseHourInput = eveningCloseHourHTML.innerHTML;
const selectElement = document.getElementById("hoursOption");

// const morningOpenHour = morningOpenHourInput.value;
// const morningCloseHour = morningCloseHourInput.value;
// const eveningOpenHour = eveningOpenHourInput.value;
// const eveningCloseHour = eveningCloseHourInput.value;

// Convertir les heures d'ouverture et de fermeture en objets de date
const morningOpenTime = new Date(`2000/01/01 ${morningOpenHourInput}`);
const morningCloseTime = new Date(`2000/01/01 ${morningCloseHourInput}`);
const eveningOpenTime = new Date(`2000/01/01 ${eveningOpenHourInput}`);
const eveningCloseTime = new Date(`2000/01/01 ${eveningCloseHourInput}`);

// Boucle pour ajouter 30 minutes à chaque itération jusqu'à atteindre 1 heure avant l'heure de fermeture du matin
let currentTime = new Date(morningOpenTime);

while (currentTime < morningCloseTime) {
  const option = document.createElement("option");
  const timeString = currentTime.toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
  option.value = timeString;
  option.textContent = timeString;

  selectElement.appendChild(option);

  currentTime.setMinutes(currentTime.getMinutes() + 15);

  // Vérifier si on a atteint 1 heure avant l'heure de fermeture du matin
  if (currentTime.getHours() === morningCloseTime.getHours() - 1 && currentTime.getMinutes() === morningCloseTime.getMinutes()) {
    break;
  }
}

// Réinitialiser l'heure actuelle pour la période du soir
currentTime = new Date(eveningOpenTime);

// Boucle pour ajouter 30 minutes à chaque itération jusqu'à atteindre 1 heure avant l'heure de fermeture du soir
while (currentTime < eveningCloseTime) {
  const option = document.createElement("option");
  const timeString = currentTime.toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
  option.value = timeString;
  option.textContent = timeString;

  selectElement.appendChild(option);

  currentTime.setMinutes(currentTime.getMinutes() + 15);

  // Vérifier si on a atteint 1 heure avant l'heure de fermeture du soir
  if (currentTime.getHours() === eveningCloseTime.getHours() - 1 && currentTime.getMinutes() === eveningCloseTime.getMinutes()) {
    break;
  }
}