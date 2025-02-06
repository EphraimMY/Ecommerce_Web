import "./table.header.css";
import iconSearch from "../../../assets/icons/search.svg";
export default function TableHeader({ PageTitle, children }) {
  return (
    <div className="table-head">
      <h2>{PageTitle}</h2>
      <div className="table-head-right">
        {children}
        <div className="table-search">
          <img src={iconSearch} alt="" />
          <input type="text" placeholder="Search" />
        </div>
      </div>
    </div>
  );
}
