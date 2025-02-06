import "./image-bulle.css";
export default function ImageBulle({ url, alt = "" }) {
  return (
    <div className="image-bulle">
      <img src={url} alt={alt} />
    </div>
  );
}
