import "./size-checkbox.css";
export default function SizeCheckbox({ size }) {
  return (
    <div>
      <label htmlFor="size-checkbox" className="size-checkbox">
        {size}
        <input type="checkbox" id="size-checkbox" />
      </label>
    </div>
  );
}
