**INSTALLAZIONE SU MAC:**

brew install elm

**VERIFICA LA VERSIONE INSTALLATA:**

elm --version

**CERCA VERSIONI DISPONIBILI DI ELM:**

brew search elm

**INSTALLA UNA VERSIONE PRECEDENTE:**

brew install elm@<version>

**AGGIORNA LA VERSIONE:**

1. brew update

2. brew upgrade elm

**CAMBIA TRA DIVERSE VERSIONI:**

1. brew unlink elm

2. brew link elm@<version>

[per controllare la versione in uso dopo questi comandi, riavvia elm --version]

**RIMUOVI ELM DAL COMPUTER:**

brew uninstall elm



**INSTALLAZIONE SU WINDOWS:**

1. Installa Node.js da [https://nodejs.org/en]

2. npm install -g elm

**VERIFICA LA VERSIONE INSTALLATA:**

elm --version

**INSTALLA UNA VERSIONE PRECEDENTE:**

npm install -g elm@<version>

**AGGIORNA LA VERSIONE:**

npm install -g elm

**CAMBIA TRA DIVERSE VERSIONI:**

1. npm uninstall -g elm

2. npm install -g elm@<version>

**RIMUOVI ELM DAL COMPUTER:**

npm uninstall -g elm



**INSTALLAZIONE DI NODE:**

Se non precedentemente installato, installa Node.js scaricandolo dal sito ufficiale (WINDOWS):

[https://nodejs.org/en]

o tramite homebrew (MAC) con il comando nel terminale:

brew install node



**INTEGRARE ELM IN LARAVEL**

1. Entra nel tuo progetto Laravel e aprilo

2. composer install

3. npm install

***Vite interagirà con Elm ->***

4. npm install --save-dev vite-plugin-elm

5. Apri il file vite.config.js e cancella il suo contenuto per evitare conflitti legati all'esportazione predefinita di vari plugin

6. Sostituiscilo incollando il seguente codice, che servirà per l'integrazione di Elm con Vite e gestirà tutti i plugin inclusi in un unico array.
Salva il file vite.config.js.
***È essenziale che l'importazione del plugin relativo a Elm sia come quella qui sotto***



import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { plugin as elmPlugin } from 'vite-plugin-elm';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        elmPlugin(),
    ],
});



**INSTALLAZIONE DI BOOTSTRAP E FONTAWESOME PER VITE**

***[Questo deve essere fatto; altrimenti, quando lanci il server con php artisan serve e apri il browser, vedrai un errore di Vite, perché bootstrap e font awesome sono importati nei file app.css e main.js trovati in resources/css e resources/js]***

1. npm i bootstrap

2. npm install @fortawesome/fontawesome-free


**INFINE:**

Ricorda di lanciare altri comandi necessari come php artisan key:gen, per creare e/o connettere un database se necessario, ecc., e poi, infine:

1. In un nuovo terminale, che lascerai aperto a lato, lancia:      npm run dev

2. php artisan serve

3. ctrl+C (Windows) o cmd+C (Mac) e clicca sul link
