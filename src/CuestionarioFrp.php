<?php

namespace src;

use src\cuestionario\{
    CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo,
    ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene,
    TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares,
    DecisionesQuePuedeTomarEnSuTrabajo,
    CapacitacionEInformacionQueRecibeSobreSuTrabajo,
    RelacionesConSusCompa├▒erosDeTrabajoYSuJefe,
    AtencionAClientesYUsuarios,
    ActitudesDeLosTrabajadoresQueSupervisa
};

class CuestionarioFrp
{
    private $_condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo;
    private $_actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene;
    private $_tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares;
    private $_decisionesQuePuedeTomarEnSuTrabajo;
    private $_capacitacionEInformacionQueRecibeSobreSuTrabajo;
    private $_relacionesConSusCompa├▒erosDeTrabajoYSuJefe;
    private $_atencionAClientesYUsuarios;
    private $_actitudesDeLosTrabajadoresQueSupervisa;

    public function __construct
    (
        CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo $CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo,
        ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene $ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene,
        TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares $TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares,
        DecisionesQuePuedeTomarEnSuTrabajo $DecisionesQuePuedeTomarEnSuTrabajo,
        CapacitacionEInformacionQueRecibeSobreSuTrabajo $CapacitacionEInformacionQueRecibeSobreSuTrabajo,
        RelacionesConSusCompa├▒erosDeTrabajoYSuJefe $RelacionesConSusCompa├▒erosDeTrabajoYSuJefe,
        AtencionAClientesYUsuarios $AtencionAClientesYUsuarios,
        ActitudesDeLosTrabajadoresQueSupervisa $ActitudesDeLosTrabajadoresQueSupervisa
    )
    {
        $this->_condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo = $CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo;
        $this->_actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene = $ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene;
        $this->_tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares = $TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares;
        $this->_decisionesQuePuedeTomarEnSuTrabajo = $DecisionesQuePuedeTomarEnSuTrabajo;
        $this->_capacitacionEInformacionQueRecibeSobreSuTrabajo = $CapacitacionEInformacionQueRecibeSobreSuTrabajo;
        $this->_relacionesConSusCompa├▒erosDeTrabajoYSuJefe = $RelacionesConSusCompa├▒erosDeTrabajoYSuJefe;
        $this->_atencionAClientesYUsuarios = $AtencionAClientesYUsuarios;
        $this->_actitudesDeLosTrabajadoresQueSupervisa = $ActitudesDeLosTrabajadoresQueSupervisa;
    }

    public function condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo(): CondicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo
    {
        return $this->_condicioneDeSuCentroDeTrabajoCantidadYRitmoDeTrabajo;
    }

    public function actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene(): ActividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene
    {
        return $this->_actividadesQueRealizaEnSuTrabajoYLasResponsabilidadesQueTiene;
    }

    public function tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares(): TiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares
    {
        return $this->_tiempoDestinadoASuTrabajoYSusResponsabilidadesFamiliares;
    }

    public function decisionesQuePuedeTomarEnSuTrabajo(): DecisionesQuePuedeTomarEnSuTrabajo
    {
        return $this->_decisionesQuePuedeTomarEnSuTrabajo;
    }

    public function capacitacionEInformacionQueRecibeSobreSuTrabajo(): CapacitacionEInformacionQueRecibeSobreSuTrabajo
    {
        return $this->_capacitacionEInformacionQueRecibeSobreSuTrabajo;
    }

    public function relacionesConSusCompa├▒erosDeTrabajoYSuJefe(): RelacionesConSusCompa├▒erosDeTrabajoYSuJefe
    {
        return $this->_relacionesConSusCompa├▒erosDeTrabajoYSuJefe;
    }

    public function atencionAClientesYUsuarios(): AtencionAClientesYUsuarios
    {
        return $this->_atencionAClientesYUsuarios;
    }

    public function actitudesDeLosTrabajadoresQueSupervisa(): ActitudesDeLosTrabajadoresQueSupervisa
    {
        return $this->_actitudesDeLosTrabajadoresQueSupervisa;
    }
}