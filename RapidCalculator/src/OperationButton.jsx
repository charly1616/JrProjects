import React from 'react'

const ACTIONS = {
    ADD_DIGIT: "add-digit",
    CHOOSE_OPERATION: "choose-operation",
    CLEAR: "clear",
    DELETE_DIGIT: "delete-digit",
    EVALUATE: "evaluate",
  }

const OperationButton = ({dispatch, operation}) => {
  return (
    <button onClick={() => dispatch({type:ACTIONS.CHOOSE_OPERATION, payload:{operation}})}>
        {operation}
    </button>
  )
}

export default OperationButton