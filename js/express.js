// BenBernhardG (Ben Giese) 2023

const { exec } = require('child_process');
const http = require('http');

const phpFilePath = 'index.php';

const server = http.createServer((req, res) => {
    if (req.url === '/') {
        exec(`php -f ${phpFilePath}`, (error, stdout, stderr) => {
            if (error) {
                res.writeHead(500, { 'Content-Type': 'text/plain' });
                res.end('Interner Serverfehler');
                return;
            }
            res.writeHead(200, { 'Content-Type': 'text/html' });
            res.end(stdout);
        });
    } else {
        res.writeHead(404, { 'Content-Type': 'text/plain' });
        res.end('Seite nicht gefunden');
    }
});

const port = 12345;
server.listen(port, () => {
    console.log(`Server läuft auf Port ${port}`);
});
