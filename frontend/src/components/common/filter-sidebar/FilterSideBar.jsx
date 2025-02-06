import Checkbox from "../../ui/checkbox/Checkbox";
import ColorCheckbox from "../../ui/color-checkbox/ColorCheckbox";
import InputRange from "../../ui/input-range/InputRange";
import SizeCheckbox from "../../ui/size-checkbox/SizeCheckbox";
import "./filter-sidebar.css";
export default function FilterSideBar() {
  return (
    <aside className="filter-side-bar">
      <div className="sidebar-cathegories">
        <h3>Categories</h3>
        <div className="inputs">
          <Checkbox label={"parfum..."} />
          <Checkbox label={"parfum..."} />
          <Checkbox label={"parfum..."} />
          <Checkbox label={"parfum..."} />
        </div>
      </div>
      <div className="sidebar-colors">
        <h3>Colors</h3>
        <div className="checkboxs">
          <ColorCheckbox color="var(--blue-400)" />
          <ColorCheckbox color="var(--yellow-400)" />
          <ColorCheckbox color="var(--green-400)" />
          <ColorCheckbox color="var(--primary-B900)" />
        </div>
      </div>
      <div className="sidebar-sizes">
        <h3>Sizes</h3>
        <div className="sizes-inputs">
          <SizeCheckbox size={"S"} />
          <SizeCheckbox size={"M"} />
          <SizeCheckbox size={"L"} />
          <SizeCheckbox size={"XL"} />
          <SizeCheckbox size={"XXL"} />
        </div>
      </div>
      <div className="sidebar-price-range">
        <h3>Price Range</h3>
        <div className="inputs-range">
          <InputRange min={10} max={200} />
        </div>
      </div>
    </aside>
  );
}
