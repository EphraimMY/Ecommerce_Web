import BestStellingCard from "../../ui/best-selling-card/BestStellingCard";
import "./best-selling.css";

export default function BestSelling({ data }) {
  return (
    <section className="best-stelling-section">
      <div className="best-selling">
        {data.map((item) => (
          <BestStellingCard
            key={item.id}
            icon={item.icon}
            title={item.title}
            description={item.description}
          />
        ))}
      </div>
    </section>
  );
}
