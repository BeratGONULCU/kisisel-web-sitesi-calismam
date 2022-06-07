function generateCipher(text) {
  debugger
    let alphabet = "abcdefghijklmnopqrstuvwxyz".split("");
    let cipher = [];
    // it's poor style to hardcode a magic number like 26
    let alphabetLength = alphabet.length;
    for (let i = 0; i < alphabetLength; i++) {
      let randomIndex = Math.floor(Math.random() * alphabet.length);
      cipher.push(alphabet.splice(
        [Math.floor(Math.random() * alphabet.length)], 1));
    }
    //document.getElementById("output").innerText = cipher;
    let result = "";
    for (let i = 0; i < text.length; i++) {
      if (text[i] >= 'a' && text[i] <= 'z') {
        let letterCode = text.charCodeAt(i) - 'a'.charCodeAt(0);
        result += cipher[letterCode];
      } else {
        result += text[i];
      }
    }
    //document.getElementById("output").innerText = result.replace(",", "");
    return result.replace(",","");
  }