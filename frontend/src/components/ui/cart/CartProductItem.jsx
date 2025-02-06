import CloseIcon from "../../../assets/icons/CloseIcon";
import image from "../../../assets/images/short.png";
import "./product-item.css";
export default function CartProductItem() {
  return (
    <div className="product-item-cart">
      <div className="image">
        <img src={image} alt="" />
        <button>
          <CloseIcon />
        </button>
      </div>
      <div className="content">
        <div className="top">
          <h5>Raw black T-Shirt Lineup</h5>
          <div className="color-size">
            <div
              className="color"
              style={{ backgroundColor: "var(--blue-400)" }}
            ></div>
            -<div className="size">M</div>
          </div>
        </div>
        <div className="middle">
          <div className="btns">
            <button> - </button>
            <span className="value">1</span>
            <button>+</button>
          </div>
          <span className="price">$75.00</span>
        </div>
      </div>
    </div>
  );
}
