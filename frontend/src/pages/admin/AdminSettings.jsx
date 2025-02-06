import "../../assets/styles/admin.settings.css";
import { Input } from "../../components/ui/input/Input";
export default function AdminSettings() {
  return (
    <section className="admin-content">
      <div className="settings-content">
        <div className="settings-header">
          <h2>Settings</h2>
        </div>
        <div className="settings-body">
          <form>
            <div className="settings-inputs">
              <Input label="Nom du site" type="text" />
              <Input label="Support email" type="email" />
              <Input label="Objectif de commande mensuel" type="number" />
            </div>
            <div className="settings-btn">
              <button type="submit"> Enregistrer</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  );
}
