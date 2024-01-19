**INSTALLATION ON MAC:**

brew install elm

**CHECK INSTALLED VERSION:**

elm --version

**SEARCH FOR AVAILABLE ELM VERSIONS:**

brew search elm

**INSTALL PREVIOUS VERSION:**

brew install elm@<version>

**UPGRADE VERSION:**

1. brew update

2. brew upgrade elm

**SWITCH BETWEEN DIFFERENT VERSIONS:**

1. brew unlink elm

2. brew link elm@<version>

[to check the version in use after these commands, re-launch elm --version]

**REMOVE ELM FROM COMPUTER:**

brew uninstall elm



**INSTALLATION ON WINDOWS:**

1. Install Node.js from [https://nodejs.org/en]

2. npm install -g elm

**CHECK INSTALLED VERSION:**

elm --version

**INSTALL PREVIOUS VERSION:**

npm install -g elm@<version>

**UPGRADE VERSION:**

npm install -g elm

**SWITCH BETWEEN DIFFERENT VERSIONS:**

1. npm uninstall -g elm

2. npm install -g elm@<version>

**REMOVE ELM FROM COMPUTER:**

npm uninstall -g elm



**INSTALL NODE:**

If not previously installed, install Node.js by downloading it from the official site (WINDOWS):

[https://nodejs.org/en]

or through homebrew (MAC) via the terminal command:

brew install node



**INTEGRATING ELM IN LARAVEL**

1. Enter your Laravel project and open it

2. composer install

3. npm install

***Vite will interact with Elm ->***

4. npm install --save-dev vite-plugin-elm

5. Open the vite.config.js file and delete its content to avoid conflicts related to the default export of various plugins.

6. Replace it by pasting the following code, which will serve for the integration of Elm with Vite and will manage all the included plugins in a single array.
Save the vite.config.js file.
***It's essential that the import of the plugin related to Elm is as the one below***



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



**INSTALLATION OF BOOTSTRAP AND FONTAWESOME FOR VITE**

***[This must be done; otherwise, when you launch the server with php artisan serve and open the browser, you will see a Vite error, because bootstrap and font awesome are imported in the app.css and main.js files found in resources/css and resources/js]***

1. npm i bootstrap

2. npm install @fortawesome/fontawesome-free


**FINALLY:**

Remember to launch other necessary commands such as php artisan key:gen, to create and/or connect a database if necessary, etc., and then, finally:

1. In a new terminal, which you will leave open aside, launch:     npm run dev

2. php artisan serve

3. ctrl+C (Windows) or cmd+C (Mac) and click on the link
