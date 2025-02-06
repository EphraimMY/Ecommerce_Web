import "../../assets/styles/client.wish-list.css";
import ClientRowWish from "../../components/ui/client-row/ClientRowWish";
export default function ClientWishList() {
  return (
    <div className="product-list-orders">
      <ClientRowWish />
      <ClientRowWish />
    </div>
  );
}
