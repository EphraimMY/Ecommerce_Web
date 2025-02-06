import "./order-info.css";
export default function OrderInfo({ title = "", price = "" }) {
  return (
    <div className="line-information">
      <span className="title">{title}: </span>
      <span className="price"> {price}</span>
    </div>
  );
}
