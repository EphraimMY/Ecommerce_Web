import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import ColorCheckbox from "../../components/ui/color-checkbox/ColorCheckbox";
import SizeCheckbox from "../../components/ui/size-checkbox/SizeCheckbox";
import "../../assets/styles/client.product.css";
import More from "../../assets/icons/More";
import ProductCard from "../../components/ui/product-card/ProductCard";
import EmptyStar from "../../assets/icons/EmptyStar";
import Modal from "../../components/common/modal/Modal";
import Cart from "../../components/ui/cart/Cart";
export default function Product() {
  return (
    <>
      <Modal isOpen={true}>
        <Cart />
      </Modal>
      <ClientHeader />
      <BreadCrumb />
      <section className="product-section">
        <div className="product-content">
          <div className="product-hero">
            <div className="imgs-products-caroussel"></div>
            <div className="product-infos">
              <h2>Raw Black T-shirt Lineup</h2>
              <div className="review-count-product">
                <span className="review-count">
                  {" "}
                  <i className="fas fa-star"></i>
                  4.5 - 5 reviews
                </span>
                <div className="info-stock">In stock</div>
              </div>
              <div className="price-product">
                <span className="price"> $ 25.00</span>
              </div>
              <form action="" className="product-form">
                <div className="product-color">
                  <h4>Available colors</h4>
                  <div>
                    <ColorCheckbox color="var(--blue-400)" />
                    <ColorCheckbox color="var(--yellow-400)" />
                    <ColorCheckbox color="var(--green-400)" />
                  </div>
                </div>
                <div className="product-size">
                  <h4>Available sizes</h4>
                  <div>
                    <SizeCheckbox size="S" />
                    <SizeCheckbox size="M" />
                    <SizeCheckbox size="X" />
                    <SizeCheckbox size="XL" />
                    <SizeCheckbox size="XXL" />
                  </div>
                </div>
                <div className="product-quantity">
                  <h4>Quantity</h4>
                  <div className="btns">
                    <button className="btn-quantity">-</button>
                    <button className="quantity">2</button>
                    <button className="btn-quantity">+</button>
                  </div>
                </div>
                <div className="product-add-to-cart">
                  <button className="btn btn-primary">Add to cart</button>
                  <button className="btn-like">
                    <i className="fas fa-heart"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div className="product-reviews-description">
            <div className="left">
              <button className="active">
                <More />
                Details
              </button>
              <button>
                <EmptyStar />
                Reviews
              </button>
            </div>
            <div className="right">
              <div className="description">
                <h3>Description</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolorum, quos Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit. Dolorum, quos Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit. Dolorum, quos
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolorum, quos Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit. Dolorum, quos Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit. Dolorum, quos
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolorum, quos Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit. Dolorum, quos Lorem ipsum dolor sit amet,
                  consectetur adipisicing elit. Dolorum, quos
                </p>
              </div>
            </div>
          </div>
          <div className="similar-products">
            <h3>You might also like</h3>
            <p>Similar product</p>

            <div className="similar-product-content">
              <ProductCard />
              <ProductCard />
              <ProductCard />
              <ProductCard />
            </div>
          </div>
        </div>
      </section>
      <ClientFooter />
    </>
  );
}
