import ProductCard from "../../ui/product-card/ProductCard";
import "./product-list.css";
export default function ProductList() {
  return (
    <section className="product-list">
      <div className="product-list-content">
        <div className="btns-filters">
          <button className="btn-filter">Featured</button>
          <button className="btn-filter">Latest</button>
        </div>
        <div className="content-list">
          <ProductCard />
          <ProductCard />
          <ProductCard />
          <ProductCard />
        </div>
      </div>
    </section>
  );
}
