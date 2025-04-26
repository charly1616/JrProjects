import React, { useContext } from 'react'
import './main.css'
import { assets } from '../../assets/assets'
import {Context} from "../../context/context.jsx"

const Main = () => {
    const {onSent, recentPrompt, showResult, loading, resultData, setInput, input} = useContext(Context);


  return (
    <div className="main">
        <div className="nav">
            <p>Charmini</p>
            <img src={assets.user_icon} alt="" />
        </div>
        <div className="main-container">

            {!showResult? 
                <>
                    <div className="greet">
                        <p><span>Hola, Humano</span></p>
                        <p>Como te puedo ayudar hoy</p>
                    </div>
                    <div className="cards">
                        <div className="card">
                            <p>Recomienda bonitos lugares para comerse una salchipapa</p>
                            <img src={assets.compass_icon} alt="" />
                        </div>

                        <div className="card">
                            <p>Haz un resumen del modelo OSI</p>
                            <img src={assets.bulb_icon} alt="" />
                        </div>

                        <div className="card">
                            <p>Inteligencia artificial, fundamentos y conceptos matematicos basicos</p>
                            <img src={assets.message_icon} alt="" />
                        </div>

                        <div className="card">
                            <p>Mejora la redibilidad del siguiente informe</p>
                            <img src={assets.code_icon} alt="" />
                        </div>
                    </div>
                </>
                :
                <div className='result'>
                    <div className="result-title">
                        <img src={assets.user_icon} alt="" />
                        <p>{recentPrompt}</p>
                    </div>
                    <div className="result-data">
                        <img src={assets.gemini_icon} alt="" />
                        {loading?
                        <div className="loader">
                            <hr />
                            <hr />
                            <hr />
                        </div>: 
                        <p dangerouslySetInnerHTML={{__html:resultData}}></p>
                        }
                        
                    </div>
                </div>
            }
            
            <div className="main-bottom">
                <div className="search-box">
                    <input onChange={(e)=>setInput(e.target.value)} value={input} type="text" placeholder='Escribe un prompt aqui'/>
                    <div>
                        <img src={assets.gallery_icon} alt="" />
                        <img src={assets.mic_icon} alt="" />
                        {(input !== "") && <img onClick={()=>onSent()} src={assets.send_icon} alt="" />}
                    </div>
                </div>
                <p className="bottom-info">
                    Charmini puede dar informacion incorrecta entonces siempre verifica.
                </p>
            </div>
        </div>
    </div>
  )
}

export default Main