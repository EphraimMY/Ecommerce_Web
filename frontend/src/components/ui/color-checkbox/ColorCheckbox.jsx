import "./color-checkbox.css";
export default function ColorCheckbox({ color = "blue" }) {
  const style = {
    backgroundColor: color,
  };
  return (
    <div>
      <label htmlFor="color-input" className="color-label" style={style}>
        <input type="checkbox" id="color-input" />
      </label>
    </div>
  );
}
