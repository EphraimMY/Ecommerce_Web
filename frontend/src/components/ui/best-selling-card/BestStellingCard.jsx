import "./stelling-card.css";
export default function BestStellingCard({ icon, title, description }) {
  return (
    <div className="best-selling-card">
      <div className="selling-icon">
        <img src={icon} alt="" />
      </div>
      <div className="selling-content">
        <h4>{title}</h4>
        <p>{description}</p>
      </div>
    </div>
  );
}
