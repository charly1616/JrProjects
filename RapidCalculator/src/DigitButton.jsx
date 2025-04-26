import React from 'react'

const ACTIONS = {
    ADD_DIGIT: "add-digit",
    CHOOSE_OPERATION: "choose-operation",
    CLEAR: "clear",
    DELETE_DIGIT: "delete-digit",
    EVALUATE: "evaluate",
  }


const DigitButton = ({dispatch, digit}) => {
  return (
    <button onClick={() => dispatch({type:ACTIONS.ADD_DIGIT, payload:{digit}})}>
        {digit}
    </button>
  )
}

export default DigitButton