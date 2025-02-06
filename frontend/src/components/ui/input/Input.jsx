import "./style.input.css";
import { useId } from "react";

export function Input({ type = "text", label = "", value = "" }) {
  const inputId = useId();
  return (
    <div className="input-div">
      <label htmlFor={inputId}>{label}</label>
      <input id={inputId} type={type} defaultValue={value} />
    </div>
  );
}
