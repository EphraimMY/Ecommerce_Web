import "./checkbox.css";
export default function Checkbox({ label }) {
  return (
    <div className="checkbox-div">
      <input type="checkbox" id="che" />
      <label htmlFor="che">{label}</label>
    </div>
  );
}
