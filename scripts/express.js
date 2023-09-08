const express = require('express');
const path = require('path');
const app = express();
const port = 3000;

app.use(express.static(path.join(__dirname, 'public')));

app.all('*.php', (req, res, next) => {
    const phpFilePath = path.join(__dirname, 'public', req.url);
    const { exec } = require('child_process');
    exec(`php -f ${phpFilePath}`, (error, stdout, stderr) => {
        if (error) {
            console.error(`Fehler beim Ausführen der PHP-Datei: ${error}`);
            res.status(500).send('Interner Serverfehler');
            return;
        }
        res.status(200).send(stdout);
    });
});

app.listen(port, () => {
    console.log(`Der Server läuft auf Port ${port}`);
});
