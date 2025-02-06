import "../../assets/styles/products.css";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import FilterSideBar from "../../components/common/filter-sidebar/FilterSideBar";
import ProductCard from "../../components/ui/product-card/ProductCard";
import ProductPagination from "../../components/ui/product-pagination/ProductPagination";
export default function Products() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb />
      <section className="section-listing-products">
        <div className="content-products">
          <FilterSideBar />
          <div className="products-lists">
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
            <ProductCard />
          </div>
          <ProductPagination />
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
