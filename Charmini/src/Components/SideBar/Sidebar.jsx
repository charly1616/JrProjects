import React, { useContext, useState } from 'react'
import './sidebar.css'
import {assets} from '../../assets/assets.js'
import { Context } from '../../context/context.jsx'


const Sidebar = () => {

  const [extended, setExtended] = useState(false)
  const {onSent, prevPrompts, setRecentPrompt, newChat} = useContext(Context);

  const loadPrompt = async (prompt) => {
    setRecentPrompt(prompt)
    await onSent(prompt)
  }

  return (
    <div className='sidebar'>
      <div className="top">
        <img src={assets.menu_icon} alt="" className='menu' onClick={()=>setExtended(!extended)}/>
        <div onClick={()=> newChat()} className="new-chat">
        <img src={assets.plus_icon} style={{height:'20px', width:'auto'}} alt="" />
          {extended && <p>Nuevo Chat</p>}
        </div>
        {extended && 
        <div className="recent">
          <p className="recent-title">Recent</p>
          {prevPrompts.map(
            (item, index)=>{
              return (
                <div onClick={()=>loadPrompt(item)} className="recent-entry">
                  <img src={assets.message_icon} alt=""/>
                  <p>{item.slice(0,15)}...</p>
                </div>
              )
            }
          )}
          
        </div>}
      </div>
      <div className="bottom">
        <div className="bottom-item">
          <img src={assets.question_icon} alt="" />
          {extended && <p>Ayuda</p>}
        </div>
        <div className="bottom-item">
          <img src={assets.history_icon} alt="" />
          {extended && <p>Actividad</p>}
        </div>
        <div className="bottom-item">
          <img src={assets.send_icon} alt="" />
          {extended && <p>Config</p>}
        </div>
      </div>
    </div>
  )
}

export default Sidebar