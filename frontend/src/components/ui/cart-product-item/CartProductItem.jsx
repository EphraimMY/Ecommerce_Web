import "./cart-product-item.css";
import imageSheert from "../../../assets/images/t-sheert.png";
import manusIcon from "../../../assets/icons/Minus.svg";
import addIcon from "../../../assets/icons/Add.svg";
import removeIcon from "../../../assets/icons/CloseIcon.jsx";
export default function CartProductItem({ color = "red" }) {
  const style = {
    color: {
      backgroundColor: color,
    },
  };
  return (
    <div className="cart-product-item">
      <div className="img">
        <img src={imageSheert} alt="" />
      </div>
      <div className="infos">
        <span className="title">Raw Black T-shirt Lieup</span>
        <div className="bottom-infos">
          <span className="color-span">
            Color: <div className="color-div" style={style.color}></div>
          </span>
          -<span className="size-span">Size: M</span>
        </div>
      </div>
      <span className="price">$ 75.00</span>
      <div className="btns">
        <div className="btns-control">
          <button>
            <img src={manusIcon} alt="" />
          </button>
          <button>1</button>
          <button>
            <img src={addIcon} alt="" />
          </button>
        </div>
        <button className="btn-close">
          <img src={removeIcon} alt="" />
        </button>
      </div>
    </div>
  );
}
