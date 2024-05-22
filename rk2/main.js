document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        document.getElementById('registrationForm').style.display = 'none';
        document.getElementById('messageForm').style.display = 'block';
    });
});

var messages = getAllMessages();
function determineField(hashtag) {
    return "Кулинария";
}

messages.forEach(function(message) {
    var field = determineField(message.hashtag);
    console.log("Сообщение: " + message.description + " - Область знаний: " + field);
});
