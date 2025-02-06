import ProductCard from "../../ui/product-card/ProductCard";
import "./best.seller.css";
export default function BestSeller() {
  return (
    <section className="best-seller">
      <div className="best-seller-content">
        <div className="best-seller-text">
          <p>Shop now</p>
          <h2>Best Seller</h2>
        </div>
        <div className="best-seller-cards">
          <ProductCard />
          <ProductCard />
          <ProductCard />
          <ProductCard />
        </div>
      </div>
    </section>
  );
}
