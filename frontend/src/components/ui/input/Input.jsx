import "./style.input.css";
import { useId } from "react";

export function Input({
  type = "text",
  label = "",
  value = "",
  name = "",
  ...rest
}) {
  const inputId = useId();

  if (type === "textarea") {
    return (
      <div className="input-div">
        <label htmlFor={inputId}>{label}</label>
        <textarea id={inputId} defaultValue={value} name={name} {...rest} />
      </div>
    );
  }

  return (
    <div className="input-div">
      <label htmlFor={inputId}>{label}</label>
      <input
        id={inputId}
        type={type}
        defaultValue={value}
        name={name}
        {...rest}
      />
    </div>
  );
}
