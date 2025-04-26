const API = 'AIzaSyBnBIg3uq95Q8tepU-FKBE4CdO-1YReAXU';

import {GoogleGenAI} from "@google/genai";
import { readFile, writeFile } from 'fs/promises';


const ai = new GoogleGenAI({ apiKey: API});

function removePunctuation(text){
    return text.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()¿?¡"'<>\[\]\\|]/g, "");
}


export default async function generateStory(language) {
    //LEER EL ARCHIVO
    const rawData = await readFile('./Stories.json', 'utf-8');
    const data = JSON.parse(rawData);

    //CONFIGURAR LA RESPUESTA
  const response = await ai.models.generateContent({
    model: "gemini-2.0-flash",
    contents: "Generate an interesting text about a story in this language: "+language+", make it about science fiction, it must have 4 paragraphs and complete sense, it also mus be entertaining and appealing",
  });
  // FORMATEAR EL TEXTO DE LA RESPUESTA Y AÑADIRLO AL ARCHIVO
  const formated = removePunctuation(response.text).trim().split(" ");
  data[language].push(formated)

  //ESCRIBIR EL ARCHIVO
  await writeFile('./Stories.json', JSON.stringify(data, null, 2));
  return formated
}


await generateStory("English")
await generateStory("French")
await generateStory("Spanish")
await generateStory("Italian")
await generateStory("Portuguese")
