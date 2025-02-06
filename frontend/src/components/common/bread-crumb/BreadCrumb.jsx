import "./bread-crumb.css";
export default function BreadCrumb({
  page = "",
  color = "var(--neutral-W100)",
}) {
  return (
    <div className="bread-crumb" style={{ backgroundColor: color }}>
      <div className="bread-crumb-content">
        <h3>{page}</h3>
        <div className="page-infos">
          <p>E commerce</p>
          <span>
            <i className="fa-solid fa-chevron-right"></i>
          </span>
          <span className="current-page">{page}</span>
        </div>
      </div>
    </div>
  );
}
