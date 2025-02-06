import "../../assets/styles/client.orders.css";
import ClientRowOrders from "../../components/ui/client-row/ClientRowOrders";
export default function ClientOrder() {
  return (
    <div className="product-list-orders">
      <ClientRowOrders />
      <ClientRowOrders />
    </div>
  );
}
